<?php

namespace App\Http\Controllers\Admin\Users;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function view;

class PartnerController extends Controller
{

    public function index(){
        $users = User::all();
        return view("admin.users.partner",compact('users'));
    }
    public function create(){
        return view('admin.users.create');
    }
    public function store(Request $request){
        $request->validate([
        'name'=>'required',
        'email'=>'required',
        'role'=>'required',
        'password'=>'required',


        ]);

        $users = new User([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'role'=>$request->get('role'),
            'password'=>Hash::make($request['password']),

        ]);

        $users->save();
        return back();
    }

    public function destroy($id){

        $users = User::find($id);
        $users->delete();

    }
}
