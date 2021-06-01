<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;

class orderController extends Controller
{
    public function add(Request $request){
        //Pegar os dados do carrinho
        $cart - Cart::where('user_id', '=', Auth()->user()->id)->get();

        //Criar o pedido
        $order= Order::create([
            'user_id' => Auth()->user()->id,
            'status' => 'Processando'
            'address' => 'Rua joao da silva',
            'address_number' => '100',
            'address_city' => 'São Paulo',
            'address_state' =>  'SP',
            'cc_number' => substr($request->cc_number,-4),
        ]);

                dd($order);
    }
}
