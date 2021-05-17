<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function post(Request $request)
    {
        $orderId = $request->get('orderId');
        $status = $request->get('status');

        $order = Order::find($orderId);
        $order->status = $status;
        $order->save();

        $response = [
            'status' => 'success',
            'msg' => 'Статус успешно изменен',
        ];

        return response()->json($response);
    }
}
