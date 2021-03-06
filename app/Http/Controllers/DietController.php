<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function show($id)
    {
        $data['diet']=Diet::find($id);
        // dd($data);
        return view('diet.update',$data);
    }

    public function update($id,Request $request)
    {
        $diet=new Diet();
        $diet=Diet::find($id);
        $diet->golongan=$request->golongan;
        $diet->text=$request->panduan;
        $diet->save();
        return redirect()->route('diet');
    }

    public function detail($id)
    {
        $data['diet']=Diet::find($id);
        // dd($data);
        return view('diet.detail',$data);
    }
    
    public function history()
    {
        $data['histories']=DB::table('histories')->select('histories.*','users.name')
        ->leftJoin('users','users.id','histories.id_user')->get();
        return view('history.index',$data);
    }
}
