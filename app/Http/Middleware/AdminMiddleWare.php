<?php

namespace App\Http\Middleware;

use App\Account;
use Closure;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $current_account = session('current_account');
//        $account = Account::first();
//        dd("132");
//        dd($current_account);
//        dd($current_account->roles);
        if (isset($current_account) && $current_account != NULL){
                if ($current_account->role != 'user'){
                    return $next($request);
                }
        }
        return redirect('/');
    }
}
