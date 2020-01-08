<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SkuModel;
class SkuController extends Controller
{
    //

    public function index()
    {
    	return view("Sku");
    }

    public function store(Request $request)
    {

    	$sku=new SkuModel();
    	$sku->skuno=$request->get('skuno');
    	$sku->productid=$request->get('productid');
    	$sku->category=$request->get('category');
    	$sku->save();
    	 return redirect('/ProductList')->with('msg',"Product Add Successfully");

    }

    public function productlist()
    {

    	$sku=SkuModel::all();
    	return view('ProductList', compact('sku'));
    	
    }
}
