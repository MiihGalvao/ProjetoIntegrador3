<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','product_id','quantity'];

    public function product(){
        return products::where('id', '=', $this->products_id)->first();
    }

    public static function count(){
        return Cart::where('user_id','=', Auth()->user()->id)->get();
        $total = 0;
        foreach($cart as $item){
            $total += $item->quantity;
        }
            return $total;
    }

    public static function totalValue(){
        $cart = Cart::where('user_id','=', Auth()->user()->id)->get();
        $total = 0;
        foreach($cart as $item){
            $total += $item->product()->price * $item->quantity;
        }
            return $total;


        
    }
}
