<?php

namespace App\Http\Controllers\Admin\Partner\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Products\StoreRequest;
use App\Http\Requests\Admin\Products\UpdateRequest;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {



        $data = $request->validated();

//        $id = Subcategory::where('id' , '=' ,$data['subcategory_id'])->first()->category_id;
//        $data['category_id'] = $id;

        $data['preview_image'] = Storage::disk('public')->put('/images',$data['preview_image']);
        $data['second_image'] = Storage::disk('public')->put('/images',$data['second_image']);
        $data['third_image'] = Storage::disk('public')->put('/images',$data['third_image']);
        $data['moderation'] = 0;
        $data['partner_id'] = Auth::id();



        Product::firstOrCreate($data);
        dd('Товар добавлен');
        return redirect()->route('create.product');

    }
}
