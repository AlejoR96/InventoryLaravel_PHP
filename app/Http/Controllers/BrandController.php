<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Brand;
class BrandController extends Controller
{
                /*APLICAR LOGICA DE NEGOCIO PARA BRAND*/
    // function showBrand($show_brand = null){
    //     if ($show_brand == null) {
    //         return 'Debe ingresar una marca registrada';
    //     }
    //     return 'Nombre marca = '.$show_brand;
    // }

    // Mostrar los registros de la tabla brand
    function showBrand(){
        $listBrand = Brand::all(); //Select * from brands
        return view('brand/list', ['brands' =>$listBrand]);
    }
}
