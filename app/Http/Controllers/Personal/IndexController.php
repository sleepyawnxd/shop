<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user_id = Auth::user()->id;
        $order = Order::where('user_id',$user_id)->get();


        return view('personal.index',compact('order'));

    }
}
