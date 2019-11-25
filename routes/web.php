<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/produtos', 'ProdutoControlador@index')->middleware('auth')->name('produtos'); //Metodo 2 de protecçao da rota, a parte do middleware('auth'). protege apenas esta rota.
//Ver Metodo 1 e 3 no ProdutoControlador

Route::get('/produtos', 'ProdutoControlador@index')->name('produtos');

Route::get('/departamentos', 'DepartamentoControlador@index')->name('departamentos');

Route::get('/usuario', function () {
  return view('usuario');
});
