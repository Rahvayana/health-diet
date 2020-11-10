<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use Illuminate\Http\Request;

class DietController extends Controller
{
    public function index()
    {
        $data['diets']=Diet::all();
        return view('diet.index',$data);
    }

    public function add()
    {
        return view('diet.add');
    }

    public function store(Request $request)
    {
        $diet=new Diet();
        $diet->golongan=$request->golongan;
        $diet->text=$request->panduan;
        $diet->save();
        return redirect()->route('diet');
    }
}
