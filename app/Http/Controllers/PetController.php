<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function list(Request $request){
//        dd($request);
        $accounts = Pet::paginate(5);
        return view('admin.pets.pet_list',compact('accounts'));
    }

    public function create(){
        return view('admin.pets.create');
    }

    public function store(Request $request){
        dd($request);
    }
}
