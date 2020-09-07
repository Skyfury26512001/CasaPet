<?php

namespace App\Http\Controllers;

use App\Account;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function account_data()
    {
        $current_account_id = session('current_account')->id;
        $cr_account = Account::where('id', '=', $current_account_id)->where('Status', '=', '1')->first();
        return view('user.account.personal_info')->with('current_account', $cr_account);
    }

    public function account_update(Request $request)
    {
        $account = Account::where('Slug', '=', $request->Slug)->first();
        if (isset($account) && $account != null) {
            $account->FullName = $request->FullName;
            $account->Address = $request->Address;
            $account->Email = $request->Email;
            $account->Avatar = $request->avatar;
            $account->DateOfBirth = Carbon::createFromFormat('d/m/Y', $request->DateOfBirth)->format('Y-m-d');
            $account->PhoneNumber = $request->PhoneNumber;
            $account->IDNo = $request->IDNo;
            $account->update();
//            dd($account->Avatar);
            return redirect(route('personal_info'));
        }
        return redirect(route('error'));
    }

    public function change_password($Slug)
    {
        $account = Account::where('Slug', '=', $Slug)->get()->first();
        if (isset($account) && $account != null) {
            return view('user.account.change_password', compact('account'));
        }
        return view('user.sub_pages.error');
    }

    public function change_passwordP(Request $request)
    {
        $wrongPass = "Mật khẩu cũ sai!";
        $notMatch = "Mật khẩu mới nhập lại không trùng!";
        $request->validate(
            [
                'OldPass' => 'required',
                'NewPass' => 'required',
                'NewPassCheck' => 'required'
            ],
            [
                'OldPass.required' => 'Vui lòng nhập mật khẩu cũ',
                'NewPass.required' => 'Vui lòng nhập mật khẩu mới',
                'NewPassCheck.required' => 'Vui lòng nhập lại mật khẩu mới',
            ]);
        $account = Account::where('Slug', '=', $request->Slug)->first();
        $pass = md5($request->OldPass . $account->Salt);
        if ($pass == $account->PasswordHash) {
            if ($request->NewPass == $request->NewPassCheck) {
                $account->Salt = generateRandomString(5);
                $account->PasswordHash = md5($request->NewPass . $account->Salt);
                $account->update();
                return view('user.account.change_password');
            }
            return view('user.account.change_password')->with('mess2', $notMatch)->with('account', session()->get('current_account'));
        }
        $current_account_id = session('current_account')->id;
        $account = Account::where('id', '=', $current_account_id)->where('Status', '=', '1')->first();
        return view('user.account.change_password', compact('account'))->with('mess1', $wrongPass);
    }

    public
    function update_timeline($Slug)
    {
        $account = Account::where('Slug', '=', $Slug)->get()->first();
        if (isset($account) && $account != null) {
            return view('user.account.timeline', compact('account'));
        }
        return view('user.sub_pages.error');
    }
}
