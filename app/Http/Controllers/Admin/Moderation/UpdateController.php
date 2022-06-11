<?php

namespace App\Http\Controllers\Admin\Moderation;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function updateAccept(Request $request,$id){

        $products = Product::find($id);
        $products->moderation = $request->get('moderation');

        $products->save();
        return redirect('admin/moderation');
    }
    public function updateCancel(Request $request,$id){

        $products = Product::find($id);
        $products->moderation = $request->get('moderation');

        $products->save();
        return redirect('admin/moderation');
    }
}
