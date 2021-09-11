<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    // Logica de negocio

    function show(){
        $listCategories =Categories::all(); //Select * from categories
        return view('categories/list', ['categories' =>$listCategories]);
    }

    function form($id = null){
        $category = new Categories();
        if($id != null){
            $category = Categories::findOrFail($id);
        }
        return view('category/form', ['category' => $category]);
    }
function save(Request $request){

        $request->validate([
            'name'=> 'required|max:50',
            'description'=> 'required|max:200'
        ]);

        $category = new Categories();
        if($request->id > 0){
            $category = Categories::findOrFail($request->id);
        }
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect('/categories')->with('message', 'Categoria guardada');
    }
 function delete($id){
        $category = Categories::findOrFail($id);
        $category->delete();
        return redirect('/categories')->with('message', 'Categoria borrada');
    }

}
