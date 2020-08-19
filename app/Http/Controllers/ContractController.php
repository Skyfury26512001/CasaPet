<?php

namespace App\Http\Controllers;

use App\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function list(Request $request)
    {
//        dd($request);
        $orderBy   = "DESC";
        $contracts      = Contract::query();
        $condition = [];
        if ($request->has('start') && $request->has('end')) {
            array_push($condition, ['created_at', '>=', $request->start]);
            array_push($condition, ['created_at', '<=', $request->end]);
        }
        if ($request->has('Status')) {
            array_push($condition, ['Status', '=', $request->Status]);
        }
        if ($request->has('keyword')) {
            array_push($condition, ['Name', 'Like', '%' . $request->keyword . '%']);
        }
        if ($request->has('orderBy')) {
            $contracts->orderBy('created_at', $request->orderBy);
        } else {
            $contracts->orderBy('created_at', $orderBy);
        }
        $contracts = $contracts->where($condition)->paginate(5)->appends(request()->query());
        return view('admin.contracts.contract_list', compact('contracts'));
    }
}
