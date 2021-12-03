<?php

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

Route::get('/model', function () {
    //$products = \App\Product::all(); // select * from products

    // $user = new \App\User();
    // $user->name = 'Usuário Teste';
    // $user->email = 'email@teste.com';
    // $user->password = bcrypt('12345678');

    // $user->save();
    //return 
        // \App\User::all() - retorna todos os usuários;
        // \App\User::find(3) - retorna o usuário com vase no id;
        // \App\User::where('name', 'Pedro Lucas')->get(); 
        // \App\User::paginate(10); - paginar dados com Laravel

    return \App\User::paginate(10);
});
