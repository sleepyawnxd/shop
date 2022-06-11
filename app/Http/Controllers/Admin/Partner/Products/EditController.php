<?php

namespace App\Http\Controllers\Admin\Partner\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        dd('edit product');
        $category = Category::all();
        return view('Network_shop/admin/product/edit', compact('product','category'));
    }
}
