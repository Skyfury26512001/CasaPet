<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list(Request $request){
        $reports = Report::paginate(5);
        return view('admin.reports.list',compact('reports'));
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function edit($slug){

    }

    public function update(){

    }

    public function handle(){

    }

    public function done(){

    }
}
