<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller
{
    public function __invoke()
    {



        $sessionId = Session::getId();
        $cart = \Cart::session($sessionId)->getContent();


    }
}
