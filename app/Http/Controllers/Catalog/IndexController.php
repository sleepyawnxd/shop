<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class IndexController extends Controller
{


    //Тут передача id
    public function __invoke()
    {
        $id = 1;
        $products = Product::where('subcategory_id', '=',$id)->get();
        dd($products);
    }
}
