<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->has('cart') ? session()->get('cart') : [];

        return view('cart', compact('cart'));
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

    public function remove($slug)
    {
        if(!session()->has('cart'))
            return redirect()->route('cart.index');

        $products = session()->get('cart');

        $products = array_filter($products, function($line) use($slug){
            
            return $line['slug'] != $slug;

        });

        session()->put('cart', $products);
        return redirect()->route('cart.index');
    }
}
