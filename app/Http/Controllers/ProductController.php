<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
//controlador para mostrar los datos de base de datos en una vista
{
    function show(){
        $list = Product::all(); //select * from products
        return view('product/list',['products' => $list]);
    }
// Controlador para mostrar el formulario
    function form(){
        return view('product/form');
    }

    //
    function save(request $request){
        $product = new Product();
        $product ->name = $request ->name;
        $product ->cost = $request ->cost;
        $product ->price = $request ->price;
        $product ->quantity = $request ->quantity;
        $product ->brand = $request ->brand;

        $product ->save();

        return redirect('/products');
    }
}
