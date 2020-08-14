<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

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
        $condition = ['email' => $request->email, 'status' => "1",];
        $account = Account::where($condition)->get()->first();
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

    public function list(){
        return view('admin.accounts.account_list');
    }

    public function create(){
        return view('accounts.create');
    }

    public function store(Request $request){

    }
}
