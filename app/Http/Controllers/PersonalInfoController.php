<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function account_data()
    {
        $current_account = session('current_account');
        return view('user.personal_info', compact('current_account'));
    }

    public function account_update(Request $request)
    {
        dd($request);
    }
}
