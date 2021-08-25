<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
                /*APLICAR LOGICA DE NEGOCIO PARA BRAND*/
    function showBrand($show_brand = null){
        if ($show_brand == null) {
            return 'Debe ingresar una marca registrada';
        }
        return 'Nombre marca = '.$show_brand;
    }
}
