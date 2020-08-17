<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateAccountRequest;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class AccountController extends Controller
{
    public function login(){
        return view('users.login');
    }
    public function registerP(Request $request){
        $account = new Account();
        $account->email = $request->email;
        $account->passwordHash = md5($request->password.$request->firstName);
        $account->salt = $request->firstName;
        $account->fullName = $request->lastName.' '.$request->firstName;
        $account->phoneNumber = $request->phone;
        $account->email_verified = 'unverified';
        $account->status = 1;
        $account->city_id = $request->city;
        $account->sex = $request->sex;
        $account->birthDate = $request->birthDate ;
        $account->roles();
        $account->save();
        $currentId = $account->id;
        $account->roles()->sync($currentId);
        return redirect('/login');
    }

    public function loginP(Request $request){
        $condition = ['email' => $request->email, 'Status' => "1",];
        $account = Account::where($condition)->get()->first();
//        dd($request->email);
        if (isset($account)){
            $PasswordHash = $account->PasswordHash;
            $Salt = $account->Salt;
            $passIn = md5($request->password.$Salt);
            if ($PasswordHash == $passIn){
                session_start();
                $account_session = $request->session();
                $account['role']= $account->role->name;
                $account_session->put('current_account', $account);
              return redirect('/admin');
            }
            return redirect(route('login'))->withErrors([['email'=>'account not found'],['password'=>'Account not found']]);
        }else{
            return redirect(route('login'))->withErrors([['email'=>'account not found'],['password'=>'Account not found']]);
        }
    }

    public function list(Request $request){
//        dd($request);

        $accounts = Account::query();
        $condition = [['id' ,'!=', session()->get('current_account')->id],['role_id','<',session()->get('current_account')->Role_id]];
        if ($request->has('start') && $request->has('end')){
            array_push($condition,['created_at','>',$request->start]);
            array_push($condition,['created_at','<=',$request->end]);
        }
        if ($request->has('Status')){
            array_push($condition,['Status','=',$request->Status]);
        }
        if ($request->has('keyword')){
            array_push($condition,['Email','Like','%'.$request->keyword.'%']);
        }
        if ($request->has('orderBy')){
            $accounts->orderBy('created_at',$request->orderBy);
        }
        $accounts = $accounts->where($condition)->paginate(5);
//        dd($accounts);
        return view('admin.accounts.account_list',compact('accounts'));
    }

    public function create(){
        return view('admin.accounts.create');
    }

    public function store(RegisterRequest $request){
//        dd($request);
        $account = $request->all();
        $Salt = generateRandomString(5);
        $account['Salt'] = $Salt;
        $password = $account['Password'];
        $PasswordHash = md5($password.$Salt);
        $account['PasswordHash'] = $PasswordHash;
        $slug_begin = generateRandomString(8);
        $Slug = to_slug($slug_begin.' '.$account['FullName']);
        $account['Slug'] = $Slug;
        $account['Status'] = 1;
        $account['Avatar'] = $request->avatar;
//        dd($account);
        Account::create($account);
        dd('success');
    }

    public function edit($slug){
        $account_cur = session()->get('current_account');
        $account = Account::where('Slug','=',$slug)->where('id','!=',$account_cur->id)->first();
        return view('admin.accounts.edit',compact('account'));
    }
    public function detail($slug){
        $account_cur = session()->get('current_account');
        $account = Account::where('Slug','=',$slug)->where('id','!=',$account_cur->id)->first();
        return view('admin.accounts.detail_account',compact('account'));
    }

    public function update(UpdateAccountRequest $request,$slug){
        $account = Account::where('Slug','=',$slug)->first();
        $account->FullName = $request->FullName;
        $account->Address = $request->Address;
        $account->Email = $request->Email;
        $account->Avatar = $request->avatar;
        $account->DateOfBirth = $request->DateOfBirth;
        $account->PhoneNumber = $request->PhoneNumber;
        $account->IDNo = $request->IDNo;
        $account->Role_id = $request->Role_id;
        $account->update();
        return redirect(route('admin_account_list'));
    }
    public function active(Request $request){
        $id = $request->id;
        Account::where('id','=',$id)->update(['status' => 1]);
        return redirect(route('admin_account_list'));
    }
    public function deactive(Request $request){
        $id = $request->id;
        Account::where('id','=',$id)->update(['status' => 0]);
        return redirect(route('admin_account_list'));
    }
    public function deactive_multi(Request $request){
        $ids_array = new Array_();
        $ids = $request->ids;
        $ids_array = explode(',', $ids);
         Account::whereIn('id', $ids_array)->update(['status' => 0]);
        return response()->json(['success'=>"Account Deleted successfully."]);
    }
    public function active_multi(Request $request){
        $ids_array = new Array_();
        $ids = $request->ids;
        $ids_array = explode(',', $ids);
//        return response()->json(['success'=>$ids_array]);
         Account::whereIn('id', $ids_array)->update(['status' => 1]);
        return response()->json(['success'=>"Account Active successfully."]);
    }

    public function change_password($slug){
        $account = Account::where('Slug','=',$slug)->get()->first();
//        dd($account);
        return view('admin.accounts.change_pass',compact('account'));
    }

    public function change_passwordP(Request $request){
        $request->validate(['newPassword'=>'required'],['newPassword.required'=>'Vui lòng nhập mật khẩu mới']);
        $account = Account::where('Slug','=',$request->Slug)->first();
//        dd($account);
        $account->Salt = generateRandomString(5);
        $account->PasswordHash = md5($request->newPassword.$account->Salt);
//        dd($account);
        $account->update();
        return redirect(route('admin_account_list'));
    }
}
