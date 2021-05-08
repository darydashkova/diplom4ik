<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Validator, Redirect, Session};

class ProductController extends Controller
{
    private $categories = [
        "none" => "Выберите категорию",
        "komodi" => "Тумбы и комоды",
        "kitchen" => "Кухонные гарнитуры",
        "shkaf" => "Шкаф",
        "myagkaya" => "Мягкая мебель",
        "stulia" => "Стулья",
        "stoli" => "Столы",
        "spalnaya" => "Спальня",
    ];

    private $materials = [
        "none" => "Выберите материал",
        "dsp" => "ДСП",
        "mdf" => "МДФ",
        "stal" => "Сталь",
        "derevo" => "Массив дерева",
        "steklo" => "Стекло",
        "plastic" => "Пластик",
    ];

    private $fillings = [
        "none" => "Выберите набивку",
        "no_fillings" => "Без набивки",
        "ppy" => "ППУ",
        "sintepon" => "Синтепон",
        "xolofaiber" => "Холлофайбер",
        "latex" => "Натуральный латекс",
        "porolon" => "Поролон",
    ];

    private $colors = [
        "none" => "Выберите цвет",
        "white" => "Белый",
        "black" => "Черный",
        "honey" => "Мед",
        "kofe" => "Кофе",
        "maxagon" => "Махагон",
        "nut" => "Орех",
        "venge" => "Венге",
        "patina" => "Патина ч/б",
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view("product.index", [
            "title" => "Товары",
            "products" => $products
        ]);
    }

    /**
     * Показываем форму для создание товара и добавляем ID заказа из URL
     * @param Request $request
     * @return Application|Factory|View
     */
    public function create(Request $request)
    {
        $orderId = $request->get("orderId");

        return view("product.create")
            ->with("orderId", $orderId)
            ->with("categories", $this->categories)
            ->with("materials", $this->materials)
            ->with("fillings", $this->fillings)
            ->with("colors", $this->colors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
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
            $category = $request->get("category");

            $product = new Product();
            $product->model = $request->get("model_$category");
            $product->width = $request->get("width");
            $product->height = $request->get("height");
            $product->category = $category;
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
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function edit(Request $request, int $id)
    {
        $product = Product::find($id);
        $orderId = $request->get("orderId");

        return view("product.edit")->with("product", $product)->with("orderId", $orderId);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
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
            $product = Product::find($id);
            $product->model = $request->get("model");
            $product->width = $request->get("width");
            $product->height = $request->get("height");
            $product->category = $request->get("category");
            $product->type = $request->get("type");
            $product->filling_type = $request->get("filling_type");
            $product->material = $request->get("material");
            $product->color = $request->get("color");
            $product->save();

            $orderId = $request->get("orderId");

            // Редиректим на заказ, с которого создавали товар
            Session::flash('message', 'Товар успешно обновлен');
            return Redirect::to("product/$orderId");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // delete
        $product = Product::find($id);
        $product->delete();

        // redirect
        Session::flash('message', 'Товар был успешно удален');
        return Redirect::to('product');
    }
}
