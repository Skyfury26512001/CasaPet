<?php

namespace App\Http\Controllers;

use App\Contract;
use App\Order;
use App\Pet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class OrderController extends Controller
{
    public function list(Request $request)
    {
//        dd($request);
        $current_role = session()->get('current_account')->Role_id;
        $orders       = Order::query();
        $condition    = [];
        if ($request->has('start') && $request->has('end')) {
            array_push($condition, ['created_at', '>', $request->start]);
            array_push($condition, ['created_at', '<=', $request->end]);
        }
        if ($request->has('Status')) {
            array_push($condition, ['Status', '=', $request->Status]);
        }
        if ($request->has('keyword')) {
            array_push($condition, ['Email', 'Like', '%' . $request->keyword . '%']);
        }
        if ($request->has('orderBy')) {
            $orders->orderBy('created_at', $request->orderBy);
        } else {
            $orders->orderBy('created_at', "DESC");
        }
        $orders = $orders->where($condition)->paginate(5)->appends($request->query());
//        dd($orders);
        return view('admin.orders.list', compact('orders'));
    }

    public function create()
    {
        $pets = Pet::where('Status', '=', '1')->paginate(5);
        return view('admin.orders.create', compact('pets'));
    }

    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'OrderType'   => 'required',
            'FullName'    => 'required',
            'PhoneNumber' => 'required',
            'Email'       => 'required',
            'PetId'       => 'required',
            'IDNo'        => 'required',
        ]);
//        dd($request);
        $order           = $request->all();
        $order['Status'] = 0;
//        dd($request->thumbnails);
//        dd($order);
        Order::create($order);
//        dd($order);
        return redirect(route('admin_order_list'));
    }

    public function edit($id, Request $request)
    {
        $order_cur = Order::find($id);
        if (isset($order_cur) && $order_cur != null) {
            $order = Order::where('id', '=', $id)->first();
            $pet   = Pet::find($order->PetId);
            return view('admin.orders.edit', compact('order', 'pet'));
        }
        return redirect(route('admin_404'));
    }

    public function acept($id)
    {
        $order_cur = Order::find($id);
        if (isset($order_cur) && $order_cur != null) {
            DB::transaction(function () use ($order_cur, $id) {
                $order_cur->Status = 2;
                $order_cur->update();
                $pet = Pet::find($order_cur->PetId);
                Order::where('id', '!=', $id)->where('PetId', $pet->id)->update(['Status' => 1]);
                $contract                    = new Contract();
                $contract->Order_id          = $order_cur->id;
                $contract->Content           = "Xác nhận hợp đồng của : $order_cur->FullName nhận nuôi $pet->Name ! Yêu cầu $order_cur->FullName phải chụp ảnh đăng thông tin gửi lên page !";
                $contract->ContractDateStart = Carbon::now()->addDays(7)->toDateString();
                $contract->ContractDateEnd   = Carbon::now()->addDays(372)->toDateString();
                $contract->Status            = 0;
                $contract->save();
            });
            return redirect(route('admin_order_list'));
        }
        return redirect(route('admin_404'));
    }
}
