<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['users']=User::where('is_user',1)->get();
        return view('user.index',$data);
    }

    public function admin()
    {
        $data['users']=User::where('is_user',2)->get();
        return view('user.admin',$data);
    }
    public function addadmin()
    {
        return view('user.add-admin');
    }

    public function saveadmin(Request $request)
    {
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->gender=$request->gender;
        $user->usia=$request->usia;
        $user->is_user=2;
        $user->save();
        return redirect()->route('admin');
    }
}
