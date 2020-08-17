<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function list(Request $request){
//        dd($request);
        $pets = Pet::paginate(5);
        return view('admin.pets.pet_list',compact('pets'));
    }

    public function create(){
        return view('admin.pets.create');
    }

    public function store(Request $request){
        $request->validate([
            'Name' => 'required',
            'CertifiedPedigree' => 'required',
            'Description' => 'required',
            'Species' => 'required',
            'SpeciesSort' => 'required',
            'Age' => 'required',
            'thumbnails'=>'required',
            'Sex' => 'required',
            'Neutered' => 'required',
        ]);
        $pet = $request->all();
        $slug_begin = generateRandomString(8);
        $Slug = to_slug($slug_begin.' '.$pet['Name']);
        $pet['Slug'] = $Slug;
        $pet['Status'] = 1;
//        dd($pet);
        Pet::create($pet);
        dd($request);
    }
}
