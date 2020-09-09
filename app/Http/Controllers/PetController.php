<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class PetController extends Controller
{
    public function list(Request $request)
    {
        $orderBy   = "DESC";
        $pets      = Pet::query();
        $condition = [];
        if ($request->has('start') && $request->has('end')) {
            array_push($condition, ['created_at', '>=', $request->start]);
            array_push($condition, ['created_at', '<=', $request->end]);
        }
        if ($request->has('Status')) {
            if ($request->Status != "All") {
                array_push($condition, ['Status', '=', $request->Status]);
            }
        }
        if ($request->has('keyword')) {
            array_push($condition, ['Name', 'Like', '%' . $request->keyword . '%']);
        }
        if ($request->has('orderBy')) {
            $pets->orderBy('created_at', $request->orderBy);
        } else {
            $pets->orderBy('created_at', $orderBy);
        }
        $pets = $pets->where($condition)->paginate(5)->appends(request()->query());
        return view('admin.pets.pet_list', compact('pets'));
    }

    public function create()
    {
        return view('admin.pets.create');
    }

    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'Name'              => 'required',
            'CertifiedPedigree' => 'required',
            'Description'       => 'required',
            'Species'           => 'required',
            'Breed'             => 'required',
            'Age'               => 'required',
            'thumbnails'        => 'required',
            'Sex'               => 'required',
            'Neutered'          => 'required',
            'Vaccinated'        => 'required',
        ]);
        $pet               = $request->all();
        $slug_begin        = generateRandomString(8);
        $Slug              = to_slug($slug_begin . ' ' . $pet['Name']);
        $pet['Slug']       = $Slug;
        $pet['Status']     = 1;
        $pet['Thumbnails'] = null;
//        dd($request->thumbnails);
        foreach ($request->thumbnails as $thumb) {
            $pet['Thumbnails'] .= $thumb . ",";
        }
        $pet['Thumbnails'] = substr($pet['Thumbnails'], 0, -1);
//        dd($pet);
        Pet::create($pet);
        return redirect(route('admin_pet_list'));
    }

    public function edit($slug)
    {
        $pet = Pet::where('Slug', '=', $slug)->first();
        if (!isset($pet)) {
            return redirect(route('admin_404'));
        }
        return view('admin.pets.edit', compact('pet'));
    }

    public function detail($slug)
    {
        $pet = Pet::where('Slug', '=', $slug)->first();
        if (!isset($pet)) {
            return redirect(route('admin_404'));
        }
        return view('admin.pets.detail_pet', compact('pet'));
    }

    public function update(Request $request, $slug)
    {
//        dd($request);
        $pet                      = Pet::where('Slug', '=', $slug)->first();
        $pet['Name']              = $request->Name;
        $pet['CertifiedPedigree'] = $request->CertifiedPedigree;
        $pet['Description']       = $request->Description;
        $pet['Breed']             = $request->Breed;
        $pet['Species']           = $request->Species;
        $pet['Age']               = $request->Age;
        $pet['Vaccinated']        = $request->Vaccinated;
        $pet['Neutered']          = $request->Neutered;
        if ($request->has('thumbnails')) {
            $pet['Thumbnails'] = null;
            foreach ($request->thumbnails as $thumb) {
                $pet['Thumbnails'] .= $thumb . ",";
            }
            $pet['Thumbnails'] = substr($pet['Thumbnails'], 0, -1);
        }
        $pet['Sex']      = $request->Sex;
        $pet['Neutered'] = $request->Neutered;
//        dd($pet);

        $pet->update();
//        dd(123);
        return redirect(route('admin_pet_list'));
    }

    public function deactive(Request $request)
    {
        $id = $request->id;
        Pet::where('id', '=', $id)->update(['status' => 0]);
        return redirect(route('admin_pet_list'));
    }

    public function deactive_multi(Request $request)
    {
        $ids_array = new Array_();
        $ids       = $request->ids;
        $ids_array = explode(',', $ids);
        Pet::whereIn('id', $ids_array)->update(['status' => 0]);
        return response()->json(['success' => "Pet Deactive successfully."]);
    }

    public function active(Request $request)
    {
        $id = $request->id;
        Pet::where('id', '=', $id)->update(['status' => 1]);
        return redirect(route('admin_pet_list'));
    }

    public function active_multi(Request $request)
    {
        $ids_array = new Array_();
        $ids       = $request->ids;
        $ids_array = explode(',', $ids);
//        return response()->json(['success'=>$ids_array]);
        Pet::whereIn('id', $ids_array)->update(['status' => 1]);
        return response()->json(['success' => "Pet Active successfully."]);
    }

    public function pet_list_adoption()
    {
        $pets = Pet::where('Status', '=', '1')->paginate(8);
        return view('user.services.adoption', compact('pets'));
    }

    public function pet_detail_adoption($Slug)
    {
        $single_pet = Pet::where('Slug', '=', $Slug)->first();
        if (isset($single_pet) && $single_pet != null) {
            return view('user.services.adoption_detail', compact('single_pet'));
        }
        return redirect(route('404'));
    }

    public function adoption_form_fill($Slug)
    {
        $pet_info = Pet::where('Slug', '=', $Slug)->first();
        return view('user.services.adoption_form', compact('pet_info'));
    }

    public function pet_store(Request $request)
    {

        $request->validate([
            'Name'              => 'required',
            'CertifiedPedigree' => 'required',
            'Description'       => 'required',
            'Species'           => 'required',
            'Breed'             => 'required',
            'Age'               => 'required',
            'petthumbnails'     => 'required',
            'Sex'               => 'required',
            'Neutered'          => 'required',
            'Vaccinated'        => 'required',
        ]);
        $pet               = $request->all();
        $slug_begin        = generateRandomString(8);
        $Slug              = to_slug($slug_begin . ' ' . $pet['Name']);
        $pet['Slug']       = $Slug;
        $pet['Status']     = 1;
        $pet['Thumbnails'] = null;
//        dd($request->thumbnails);
        foreach ($request->petthumbnails as $thumb) {
            $pet['Thumbnails'] .= $thumb . ",";
        }
        $pet['Thumbnails'] = substr($pet['Thumbnails'], 0, -1);
//        dd($pet);
        Pet::create($pet);
//        dd($request);
        return back()->with('created_pet', 'true');
    }
}

