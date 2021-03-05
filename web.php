<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('inicio');
});
Route::get('inicio', function () {
    return view ('inicio');
});
/* Route::resource('usuarios','UserController');
*/
Route::get('materiales', function () {
    return view ('materiales');
});
/*
*/
Route::get('disponibles', function () {
    return view ('disponibles');
})->name ('ver.materiales');

Route::get('prueba', function () {
    return view ('prueba');
});
/*
Route::get('materiales/disponibles', 'MatController@disponible')->name('ver.materiales');
*/
/*
route::get('usuarios/{id}', 'UserController@show');/*{
	where ('id','[0-9]+');
};
route::get('usuarios/nuevo', 'UserController@crearUsuario');
*/
route::get('usuarios', 'UserController@index');
route::get('/usuarios_nuevos/{nombre}/{apodo?}',
		function($nombre,$apellido = null){
	if ($apellido) {
		return "Bienvenido {$nombre}, tu apodo es {$apellido}";
	}
	else {
		return "Bienvenido {$nombre}, no tienes apellido";
		}
});

