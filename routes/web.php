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


    // Mass Assignment - atribuição em massa
    // $user = \App\User::create([
    //     'name' => 'Pedro Lucas Guerra',
    //     'email' => 'email@email.com',
    //     'password' => bcrypt('123345566')
    // ]);

    // // Mass Update
    // $user = \App\User::find(42);
    // // $user = $user->update([ // -> retorna true ou false
    // $user->update([             // -> retorna o objeto
    //     'name' => 'Atualizando com Mass Update'
    // ]); //true ou false

    // Como eu faria para pegar a loja de um usuário
    // $user = \App\User::find(4);
    // dd($user->store()->count()); // 1:1 = objeto unico / N:N = collection de dados(objetos)

    // Pegar profutos de uma loja
    // $store = \App\Store::find(1);
    // dd($store->products()->count()); | return $store->products;

    // Pegar produtos de uma categoria
    // $category = \App\Category::find(1);
    // return $category->products; | $category->products();

    return \App\User::paginate(43);
});
