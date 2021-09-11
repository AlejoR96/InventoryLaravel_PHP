<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //
    function show(){
        $list = Category::all(); //Select * from categorys
        return view('category/list', ['categories' =>$list]);
    }

    // Metodo mostrar el formulario para agregar y editar marcar
     function form ($id = null)
    {    $category = new Category();
        if ($id !=null) {
            $category = Category::findOrFail($id);
        }
        return view('category/form',['category' => $category]);
    }


    // Metodo guardar los datos enviados y editados por el formulario
     function save (Request $request)
    {

        $request ->validate([
            "name" => 'required|max:50',
            "description" => 'required|max:150',


        ]);
        $category = new Category();
        if ($request -> id !=null) {
            $category = Category::findOrFail($request -> id);
        }
        $category -> name = $request -> name;
        $category -> description = $request -> description;


        $category -> save();

        return redirect('/categories')->with('message', 'Los datos han sido actualizados');#variables de sesion

    }



    function delete($id){
        // select * from products where id=$id
        $category =Category::findOrFail($id);
        $category -> delete();

        return redirect('/categories')->with('message', 'la marca ha sido borrado con exito'); #Variales de sesioCategory
    }

}
