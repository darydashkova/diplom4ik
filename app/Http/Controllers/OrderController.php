<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Делаем выборку всех заказов и рендерим представление
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view("order.index", [
            "orders" => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $order = new Order();
        $order->save();

        return view("order.create")->with("orderId", $order->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'model' => 'required',
            'width' => 'required|numeric',
            'height' => 'required|numeric'
        ];
        $validator = Validator::make($request->all(), $rules);

        // Валидируем данные
        if ($validator->fails()) {
            return Redirect::to('product/create')
                ->withErrors($validator);
        } else {
            // Сохраняем товар
            $product = new Product();
            $product->model = $request->get("model");
            $product->width = $request->get("width");
            $product->height = $request->get("height");
            $product->category = $request->get("category");
            $product->type = $request->get("type");
            $product->filling_type = $request->get("filling_type");
            $product->material = $request->get("material");
            $product->color = $request->get("color");
            $product->save();

            // Получаем ID сущностей Товар и Заказ, чтобы установить связь
            $newProductId = $product->id;
            $orderId = $request->get("orderId");

            $orderProduct = new OrderProduct();
            $orderProduct->order_id = $orderId;
            $orderProduct->product_id = $newProductId;
            $orderProduct->save();

            // Редиректим на заказ, с которого создавали товар
            Session::flash('message', 'Товар успешно добавлен в заказ');
            return Redirect::to("product/$orderId");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
