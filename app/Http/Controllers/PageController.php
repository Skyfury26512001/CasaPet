<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Report;

class PageController extends Controller
{
    public function home()
    {
        $pets = Pet::all()->take(10);
        $pet_4 = Pet::all()->take(4);
        $newest_report = Report::where('Status', '=', 2)->latest('updated_at')->first();
        return view('user.home', compact('pets', 'pet_4', 'newest_report'));
    }
}
