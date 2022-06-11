<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ViewController extends Controller
{


    //Тут передача id
    public function __invoke()
    {
        $id = 1;
        $products = Product::where('id', '=',$id)->firstOrFail();
        dd($products);
    }
}
