<?php

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
    //return view('welcome');
    return "Bienvenido a la pagina principal";
});

Route::get('cursos', function(){
    return "Bienvenidos a la pagina cursos";
});

//Ruta con el formulario para poder crear un curso.
/* Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
}); */

//DAR Y RECIBIR VARIABLES EN LA URL
/* Route::get('cursos/{curso}',function($curso){
    return "bienvenido al curso: $curso";
}); */

//En esta ruta, la categoria puede ser opcional, así que al final del nombre de la 
//variable se le pone un signo de interrogación y en la función se inicializa y se le da el valor null.
Route::get('cursos/{curso}/{categoria?}',function($curso, $categoria = null){

    if($categoria){
        return "bienvenido al curso: $curso, de la categoría $categoria";
    }else{
        return "bienvenido al curso: $curso";
    }
});
