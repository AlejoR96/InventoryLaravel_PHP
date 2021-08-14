<?php
/*Ruta para llamar o traer el controlador  */
use App\Http\Controllers\personaController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/usuario', function () {
 //   return "Hola desde la ruta de usuario";
//});


/*Ruta para llamar o traer el controlador  */
Route::get('/usuario/{nombre_usuario?}',
[personaController::class , 'mostrarUsuario'])->where('nombre_usuario', '[A-Za-z]+');

/*Ruta para llamar o traer el controlador del producto */
Route::get('/products', [ProductController::class, 'show']);

/*Ruta para llamar o mostrar el formulario */
Route::get('product/form',[ProductController::class, 'form'])->name('product.form');

/*Ruta para guardar los datos en la base de datos*/

Route::post('product/save', [ProductController::class, 'save']) -> name('product.save');
