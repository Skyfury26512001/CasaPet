<?php

namespace App\Http\Controllers;

use App\Pet;

class PageController extends Controller
{
    public function home()
    {
        $pets = Pet::all()->take(10);
        $pet_4 = Pet::all()->take(4);
//        dd($pets);
        return view('user.home', compact('pets', 'pet_4'));
    }
}
