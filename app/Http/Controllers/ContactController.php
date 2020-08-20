<?php

namespace App\Http\Controllers;

use App\Contract;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $request->validate([

        ]);
        Contract::created($request->all());
    }
}
