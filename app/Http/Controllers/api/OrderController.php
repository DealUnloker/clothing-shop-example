<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function addProduct(Request $request)
    {
        $order = Order::create([
            'user_id' => Auth::id(),
            'products' => json_encode($request->products)
        ]);

        return response($order, 200);
    }

    public function orders(Request $request){
        $orders = Order::where('status', $request->status)->get();
        return response($orders, 200);
    }

    public function change_status(Request $request){
        $order = Order::where('id', $request->id)->first();
        $order->status = 1;
        $order->save();
        return $order;
    }
}
