<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckOut\CartRequest;
use App\Http\Requests\CheckOut\StoreRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $order = $request->validated();

        $sessionId = Session::getId();
        $cart = \Cart::session($sessionId)->getContent();

        $order['user_id'] = Auth::user()->id;
        $order['amount'] = \Cart::session($sessionId)->getTotal();
        $save_order = Order::create($order);



        foreach ($cart as $item){

            $orderItem = [
              'order_id' => $save_order->id,
              'product_id' => $item->id,
              'name' => $item->name,
              'quantity' => $item->quantity,
              'cost' => $item->price,
              'preview_image' => $item->attributes->preview_image,
            ];

            OrderItem::create($orderItem);
        }

        return redirect(route('personal.index'));
    }
}
