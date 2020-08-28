<?php

namespace App\Http\Controllers;

class PersonalInfoController extends Controller
{
    public function account_data()
    {
        $current_account_id = session('current_account')->id;
        $cr_account = Account::where('id', '=', $current_account_id)->where('Status', '=', '1')->first();
        return view('user.personal_info')->with('current_account', $cr_account);
    }

    public function account_update(Request $request)
    {
        $account = Account::where('Slug', '=', $request->Slug)->first();
        if (isset($account) && $account != null) {
            $account->FullName = $request->FullName;
            $account->Address = $request->Address;
            $account->Email = $request->Email;
            $account->Avatar = $request->avatar;
            $account->DateOfBirth = Carbon::createFromFormat('d-m-Y', $request->DateOfBirth)->format('Y-m-d');
            $account->PhoneNumber = $request->PhoneNumber;
            $account->IDNo = $request->IDNo;
            $account->update();
            return redirect(route('personal_info'));
        }
        return redirect(route('error'));
    }
}