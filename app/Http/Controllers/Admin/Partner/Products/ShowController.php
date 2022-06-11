<?php

namespace App\Http\Controllers\Admin\Partner\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Product $product)
    {

        dd('Show partner product');

        dd($product);
        $category = Category::where('id',$product->category_id)->first();
        dd($category);
        return view('Network_shop/admin/product/show',compact('product','category'));
    }
}
