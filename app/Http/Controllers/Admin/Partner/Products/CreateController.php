<?php

namespace App\Http\Controllers\Admin\Partner\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {




        $categories = Subcategory::all();

        return view('admin.partner.products.create',compact('categories'));

    }
}
