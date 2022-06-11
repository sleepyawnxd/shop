<?php

namespace App\Http\Controllers\Admin\Partner\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        dd('delete product');

        Storage::disk('public')->delete($product->preview_image);
        Storage::disk('public')->delete($product->second_image);
        Storage::disk('public')->delete($product->third_image);



        Storage::delete($product->third_image);
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
