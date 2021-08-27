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

    // Metodo mostrar los registros de la tabla brand
    function showBrand(){
        $listBrand = Brand::all(); //Select * from brands
        return view('brand/list', ['brands' =>$listBrand]);
    }

    // Metodo mostrar el formulario
     function form ()
    {
        return view('brand/form');
    }

    // Metodo guardar los datos enviados por el formulario
     function save (Request $request)
    {
        $brand = new Brand();
        $brand -> name = $request -> name;
        $brand -> city = $request -> city;
        $brand -> country = $request -> country;

        $brand -> save();

        return redirect('/brands');

    }



    function delete($id){
        // select * from products where id=$id
        $brand =Brand::findOrFail($id);
        $brand -> delete();

        return redirect('/brands')->with('message', 'la marca ha sido borrado con exito'); #Variales de sesion;
    }


}
