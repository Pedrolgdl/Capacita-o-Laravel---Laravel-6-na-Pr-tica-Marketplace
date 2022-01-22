<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        
    }

    public function add(Request $request)
    {
        $product = $request->get('product');

        //verificar se existe sessão para os produtos
        if(session()->has('cart')) {

            //existindo eu adiciono este produtos na sessão existente
            session()->push('cart', $product); //chave / valor

        } else {

            //não existindo eu crio esta sessão com o primeiro produto
            $products[] = $product;

            session()->put('cart', $products);

        }

        flash('Produto adicionado ao carrinho!')->success();
        return redirect()->route('product.single', ['slug' => $product['slug']]);
    }
}
