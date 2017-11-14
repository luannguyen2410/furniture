<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProductViewController extends Controller
{
    public function index(Request $request){
        $this->validate($request,[
            'product_id'=>'required'
        ]);
        $productId = $request->input('product_id'); 
        $news = DB::select('select p.id, p.cat_id, p.title, p.content, p.image from product p where p.cat_id = 5 order by p.id desc LIMIT 4');
        return view('productview',['product'=>$productId, 'informations'=>$news]);
    }

    public function show(Request $request) {
        $this->validate($request,[
            'id'=>'required'
        ]);
        $id = $request->input('id');
        $product = DB::select('select p.title, p.content from product p where p.id = ?',[$id])[0];
        return response()->json(array('product'=> $product), 200);
    }

    public function products(Request $request){
        $this->validate($request,[
            'cat_id'=>'required'
        ]);
        $catId = $request->input('cat_id'); 
        $products = DB::select('select p.id, p.cat_id, p.title, p.content, p.image from product p where p.cat_id = ? order by p.id',[$catId]);
        $category = DB::select('select name from category where id = ?',[$catId])[0];
        return view('products',['category'=>$category,'products'=>$products]);
    }
}
