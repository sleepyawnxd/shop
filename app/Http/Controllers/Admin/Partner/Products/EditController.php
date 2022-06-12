<?php

namespace App\Http\Controllers\Admin\Partner\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {



        $categories = SubCategory::all();
        return view('admin/partner/products/edit', compact('product','categories'));
    }
}
