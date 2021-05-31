<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartsController extends Controller
{
    public function add(Product $product){
       $item = Cart::where([['product_id', '=', $product->id],
                    ['user_id', '=',Auth()->user()->id]])-> first();
// O Comando acima é o mesmo que o select * from carts where product_id = 9 and user_id = 1 no bd

//Se existir adiciona a quantidade( update)
        if($item){
            $item->update([
                   'quantity' => $item->quantity + 1
        ]);
        session()->flash('success', 'Foi adicionado mais um item no carrinho');
        return redirect()->back();

}
        //Se não existir criar o item na tabela
        Cart::create([
            'user_id' => Auth()->user()->id,
            'product_id' =>$product->id,
            'quantity' => 1
        ]);
        session()->flash('success', 'O produto foi adicionado no carrinho');
        return redirect()->back();
    }

        public function remove(Product $product){
            $item = Cart::where([['product_id', '=', $product->id],
                         ['user_id', '=',Auth()->user()->id]])-> first();
     // O Comando acima é o mesmo que o select * from carts where product_id = 9 and user_id = 1 no bd
     
     //Se existir adiciona a quantidade( update)
     if($item->quantity > 1){
         $item->update([
                 'quantity' => $item->quantity - 1
         ]);
         session()->flash('success', 'Foi removido um item no carrinho');
         return redirect()->back();
     }
     
             //Se não existir criar o item na tabela
             $item->delete();
             session()->flash('success', 'Foi removido o produto do carrinho');
             return redirect()->back();
             ]);

        public function show(){
            $cart = Cart::where('user_id', '=',Auth()->user()->id)->get();
            return view('cart.show')->with('cart', $cart);
        }       

        public function payment(){
            $cart = Cart::where('user_id', '=',Auth()->user()->id)->get();
            return view('cart.payment')->with('cart', $cart);
    }
}
