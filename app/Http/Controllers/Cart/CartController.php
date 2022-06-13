<?php

namespace App\Http\Controllers\Cart;

use App\Models\Product;

use Darryldecode\Cart\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{


    public static function addCart(Request $request){



        $product = Product::query()->where(['id'=>$request->id])->first();
        $sessionId = \Illuminate\Support\Facades\Session::getId();
        $cart = \Cart::session($sessionId);

        $cart->add([
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->price,
            'quantity' => $request->gty ?? 1,
            'attributes' =>
                ['image' => $product->img1],
        ]);


        return redirect()->back();
    }

    public static function removeCart(Request $request){


        $sessionId = \Illuminate\Support\Facades\Session::getId();
        \Cart::session($sessionId)->remove($request->id);


        return redirect()->back();
    }


}
