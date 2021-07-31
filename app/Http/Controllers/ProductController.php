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
}
