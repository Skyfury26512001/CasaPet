<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class PetController extends Controller
{
    public function list(Request $request){
//        dd($request);
        $orderBy = "DESC";
        $pets = Pet::query();
        $condition = [];
        if ($request->has('start') && $request->has('end')){
            array_push($condition,['created_at','>',$request->start]);
            array_push($condition,['created_at','<=',$request->end]);
        }
        if ($request->has('Status')){
            array_push($condition,['Status','=',$request->Status]);
        }
        if ($request->has('keyword')){
            array_push($condition,['Name','Like','%'.$request->keyword.'%']);
        }
        if ($request->has('orderBy')){
            $pets->orderBy('created_at',$request->orderBy);
        }else{
            $pets->orderBy('created_at',$orderBy);
        }
        $pets = $pets->where($condition)->paginate(5)->appends(request()->query());
        return view('admin.pets.pet_list',compact('pets'));
    }

    public function create(){
        return view('admin.pets.create');
    }

    public function store(Request $request){
//        dd($request);
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

    public function edit($slug){
        $pet = Pet::where('Slug','=',$slug)->first();
//        dd($pet);
        return view('admin.pets.edit',compact('pet'));
    }

    public function update($slug){

    }

    public function deactive(Request $request){
        $id = $request->id;
        Pet::where('id','=',$id)->update(['status' => 0]);
        return redirect(route('admin_pet_list'));
    }
    public function deactive_multi(Request $request){
        $ids_array = new Array_();
        $ids = $request->ids;
        $ids_array = explode(',', $ids);
         Pet::whereIn('id', $ids_array)->update(['status' => 0]);
        return response()->json(['success'=>"Pet Deleted successfully."]);
    }
    public function active(Request $request){
        $id = $request->id;
        Pet::where('id','=',$id)->update(['status' => 1]);
        return redirect(route('admin_pet_list'));
    }
    public function active_multi(Request $request){
        $ids_array = new Array_();
        $ids = $request->ids;
        $ids_array = explode(',', $ids);
//        return response()->json(['success'=>$ids_array]);
         Pet::whereIn('id', $ids_array)->update(['status' => 1]);
        return response()->json(['success'=>"Pet Active successfully."]);
    }
}
