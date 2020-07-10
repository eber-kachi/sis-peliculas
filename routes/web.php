<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use SebastianBergmann\Environment\RuntimeTest;

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
})->name('welcome.show');
Route::get('/nilda',function (){
    return view('nilda');
});
Route::get('/mostrarNombre/{nombre}',function ($nombre){
    return view('nilda',compact('nombre'));
});
Route::get('/listaPeriodico/{periodico}/{titulo}',function ($comentario,$titulo){
    return view('periodico',compact('comentario','titulo'));
});

Route::get('/listaPeriodico/{periodico?}/{titulo}',function ($comentario,$titulo){
    return view('periodico',compact('comentario','titulo'));
});
Route::post('/login/{nombre}/{contrasenia}',function ($nombre,$contrasenia){
    return view('login',compact('nombre','contrasenia'));
});
//Route::get('/website',function (){
//    return view('website');
//});
Route::get('/nilda',function (){
    $a=5;
    $b=10;
    $c=$a+$b;
    return '<a href="{{url("website")}}">nilda</a>';

});
Route::get('/producto/{nombre}',function ($nombre){
    return view('perfil',compact('nombre'));
});
Route::get('/producto/{a}/{b}',function ($a,$b){
    $a=10;
    $b=10;
    $c=$a+$b;
    return 'la respuesta es:'.$c;
});
Route::get('/opcional/{nombre}/{apelllido}',function ($nombre,$apellido='pepeto'){
    return 'mi nombre es '.$nombre.$apellido;
});

Route::get('/perfil',function (){
    return view('perfil');
});

Route::get('/website',function (){
    return view('website');
})->name('website.show');

Route::get('/login',function (){
    return view('login');

});
Route::post('/register','usuarioController@usuarioRegister')->name('usuario.register');
Route::get('/formulario','usuarioController@getformulario')->name('formulario');

//Route::resource('usuarios','usuarioController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('usuarios','usuarioController');
//Route::get('/create','createController');
Route::get('/buscarUsuario','UsuarioController@buscarUsuario')->name('usuario.buscar');
