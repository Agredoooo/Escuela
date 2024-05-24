<?php

namespace App\Http\Controllers;
use App\Models\Products;

use Illuminate\Http\Request;


class ProductsController extends Controller
{

    public function index (){
        $producto =Products::orderBy("id","desc")->get();
        return view("listar",compact("producto"));
    }
    public function create () {
        return view("product");
    }

    public function store(Request $request)
    {
        $producto= new Products();
        $producto->name_prodruct=$request->name_prodruct;
        $producto->price=$request->price;
        $producto->description=$request->description;
        $producto->quantity=$request->quantity;
        $producto->date_exp=$request->date_exp;
        $producto->save();
        return $producto;


}

}