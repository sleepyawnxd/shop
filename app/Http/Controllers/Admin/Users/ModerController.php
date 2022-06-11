<?php

namespace App\Http\Controllers\Admin\Users;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\User;
use Illuminate\Http\Request;
use function view;

class ModerController extends Controller
{

    public function index(){
        $users = User::all();
        return view("admin.users.moder",compact('users'));
    }

    public function destroy($id){

        $users = User::find($id);
        $users->delete();

        return back();

    }
}
