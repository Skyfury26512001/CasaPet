<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateAccountRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Array_;

class AccountController extends Controller
{
    public function login()
    {
        return view('user.users.login');
    }

    public function registerP(Request $request)
    {
        $account                 = new Account();
        $account->email          = $request->email;
        $account->passwordHash   = md5($request->password . $request->firstName);
        $account->salt           = $request->firstName;
        $account->fullName       = $request->lastName . ' ' . $request->firstName;
        $account->phoneNumber    = $request->phone;
        $account->email_verified = 'unverified';
        $account->status         = 1;
        $account->city_id        = $request->city;
        $account->sex            = $request->sex;
        $account->birthDate      = $request->birthDate;
        $account->roles();
        $account->save();
        $currentId = $account->id;
        $account->roles()->sync($currentId);
        return redirect('/login');
    }

    public function loginP(Request $request)
    {
        $condition = ['Email' => $request->email, 'Status' => "1",];
        $account   = Account::where($condition)->get()->first();
//        dd($request->email);
//        dd($account);
        if (isset($account)) {
            $PasswordHash = $account->PasswordHash;
            $Salt         = $account->Salt;
            $passIn       = md5($request->password . $Salt);

            if ($PasswordHash == $passIn) {
                session_start();
                $account_session = $request->session();
                $account['role'] = $account->role->name;
                $account_session->put('current_account', $account);
                return redirect('/admin');
            }
            return redirect(route('login'))->withErrors([['email' => 'account not found'], ['password' => 'Account not found']]);
        } else {
            return redirect(route('login'))->withErrors([['email' => 'account not found'], ['password' => 'Account not found']]);
        }
    }

    public function list(Request $request)
    {
//        dd($request);
        $current_role = session()->get('current_account')->Role_id;
        $accounts     = Account::query();
        $condition    = [['id', '!=', session()->get('current_account')->id], ['Role_id', '<', $current_role]];
        if ($request->has('start') && $request->has('end')) {
            array_push($condition, ['created_at', '>', $request->start]);
            array_push($condition, ['created_at', '<=', $request->end]);
        }
        if ($request->has('Status')) {
            if ($request->Status != "All") {
                array_push($condition, ['Status', '=', $request->Status]);
            }
        }
        if ($request->has('keyword')) {
            array_push($condition, ['Email', 'Like', '%' . $request->keyword . '%']);
        }
        if ($request->has('orderBy')) {
            $accounts->orderBy('created_at', $request->orderBy);
        }
        $accounts = $accounts->where($condition)->paginate(5)->appends($request->query());
//        dd($accounts);
        return view('admin.accounts.account_list', compact('accounts'));
    }

    public function create()
    {
        return view('admin.accounts.create');
    }

    public function store(RegisterRequest $request)
    {
        $account                 = $request->all();
        $Salt                    = generateRandomString(5);
        $account['Salt']         = $Salt;
        $password                = $account['Password'];
        $PasswordHash            = md5($password . $Salt);
        $account['PasswordHash'] = $PasswordHash;
        $slug_begin              = generateRandomString(8);
        $Slug                    = to_slug($slug_begin . ' ' . $account['FullName']);
        $account['Slug']         = $Slug;
        $account['Status']       = 1;
        $account['Avatar']       = $request->avatar;
        $account['Role_id']      = $request->Role_id;
//        dd($account);
        Account::create($account);
        return redirect(route('admin_account_list'));
    }

    public function edit($slug)
    {
        $account_cur = session()->get('current_account');
        $account     = Account::where('Slug', '=', $slug)->where('id', '!=', $account_cur->id)->first();
        if (isset($account) && $account != null) {
            return view('admin.accounts.edit', compact('account'));
        }
        return view('admin.404-admin');
    }

    public function detail($slug)
    {
        $account_cur = session()->get('current_account');
        $account     = Account::where('Slug', '=', $slug)->where('id', '!=', $account_cur->id)->first();
        if (isset($account) && $account != null) {
            return view('admin.accounts.detail_account', compact('account'));
        }
        return view('admin.404-admin');
    }

    public function update(UpdateAccountRequest $request, $slug)
    {
        $account = Account::where('Slug', '=', $slug)->first();
        if (isset($account) && $account != null) {
            $account->FullName    = $request->FullName;
            $account->Address     = $request->Address;
            $account->Email       = $request->Email;
            $account->Avatar      = $request->avatar;
            $account->DateOfBirth = $request->DateOfBirth;
            $account->PhoneNumber = $request->PhoneNumber;
            $account->IDNo        = $request->IDNo;
            $account->Role_id     = $request->Role_id;
            $account->update();
            return redirect(route('admin_account_list'));
        }
        return redirect(route('admin_404'));
    }

    public function deactive($id)
    {
        $account = Account::find($id);
        if (isset($account) && $account != null) {
            Account::where('id', '=', $id)->update(['status' => 0]);
            return redirect(route('admin_account_list'));
        }
        return redirect(route('admin_404'));
    }

    public function deactive_multi(Request $request)
    {
        $ids_array = new Array_();
        $ids       = $request->ids;
        $ids_array = explode(',', $ids);
        if (isset($ids_array) && $ids_array != null) {
            Account::whereIn('id', $ids_array)->update(['status' => 0]);
            return response()->json(['success' => "Account Deactive successfully."]);
        }
        return response()->json(['error' => "Account Deactive unsuccessfully."]);
    }

    public function active(Request $request)
    {
        $id      = $request->id;
        $account = Account::find($id);
        if (isset($account) && $account != null) {
            Account::where('id', '=', $id)->update(['status' => 1]);
            return redirect(route('admin_account_list'));
        }
        return redirect(route('admin_404'));
    }

    public function active_multi(Request $request)
    {
        $ids_array = new Array_();
        $ids       = $request->ids;
        $ids_array = explode(',', $ids);
//        return response()->json(['success'=>$ids_array]);
        if (isset($ids_array) && $ids_array != null) {
            Account::whereIn('id', $ids_array)->update(['status' => 1]);
            return response()->json(['success' => "Account Active successfully."]);
        }
        return response()->json(['error' => "Account Active unsuccessfully."]);
    }

    public function change_password($slug)
    {
        $account = Account::where('Slug', '=', $slug)->get()->first();
        if (isset($account) && $account != null) {
            return view('admin.accounts.change_pass', compact('account'));
        }
//        dd($account);
        return view('admin.404-admin');
    }

    public function change_passwordP(Request $request)
    {
        $request->validate(['newPassword' => 'required'], ['newPassword.required' => 'Vui lòng nhập mật khẩu mới']);
        $account = Account::where('Slug', '=', $request->Slug)->first();
//        dd($account);
        if (isset($account) && $account != null) {
            $account->Salt         = generateRandomString(5);
            $account->PasswordHash = md5($request->newPassword . $account->Salt);
//        dd($account);
            $account->update();
            return redirect(route('admin_account_list'));
        }
//        dd($account);
        return view('admin.404-admin');
    }

    public function logOut()
    {
        Session::forget('current_account');
        return redirect('/');
    }
}
