<?php

namespace App\Http\Controllers\Admin\Partner\Products;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Products\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {

        dd('update');

        $data = $request->validated();

        if( array_key_exists('preview_image',$data)){

            Storage::disk('public')->delete($product->preview_image);
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }
        if( array_key_exists('second_image',$data)){

            Storage::disk('public')->delete($product->second_image);
            $data['second_image'] = Storage::disk('public')->put('/images', $data['second_image']);
        }
        if( array_key_exists('third_image',$data)){

            Storage::disk('public')->delete($product->third_image);
            $data['third_image'] = Storage::disk('public')->put('/images', $data['third_image']);
        }

        $product->update($data);

        $category = Category::where('id','=',$product->category_id)->first();
        return view('Network_shop/admin/product/show', compact('product', 'category'));
    }
}
