<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function __invoke(Request $request,$id)
    {

        $collection = collect();


        $order = Order::findOrFail($id);
        //$product = Product::findOrFail($order->product_id);
        //$order = Order::where('user_id',$user_id->id)->get();

        foreach ($order->items as $item){
            $product = Product::find($item->product_id);
            $collection->push($product);
        }


        $collection->push($order);

        return view ('personal.view',compact('order','collection'));
    }
}
