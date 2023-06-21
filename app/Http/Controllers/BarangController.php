<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    function show(){
        $data ['product'] = Product::all();
        return view('beranda',$data);
    }

    function detail($id){
        $data ['product'] = Product::find($id);
        return view('detail_product',$data);
    }
}
