<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = DB::select('select p.id,c.name as category, p.title, p.content, p.is_delete from product p INNER join category c on c.id=p.cat_id ORDER BY p.id DESC');
        $value = $request->cookie('user');
        return view('product',['products'=>$products,'username'=>$value]);
    }

    public function search(Request $request){
        $products = DB::select('select p.id,c.name as category, p.title, p.content, p.is_delete from product p INNER join category c on c.id=p.cat_id ORDER BY p.id DESC');
        return response()->json(array('products'=>$products),200);
    }
    public function insert(Request $request){
        $this->validate($request,[
            'catId'=>'required|max:20',
            'title'=>'required|max:200',
            'content'=>'required'
        ]);
        $catId = $request->input('catId');
        $title = $request->input('title');
        $content = $request->input('content');
        $image = $request->input('image');
        DB::insert('insert into product (cat_id, title, content, image, is_delete) values(?,?,?,?,?)',[$catId, $title, $content, $image, true]);
        return response()->json(array('msg'=> 'success'), 200);
    }

    public function show(Request $request) {
        $this->validate($request,[
            'id'=>'required'
        ]);
        $id = $request->input('id');
        $product = DB::select('select p.id,p. cat_id, p.title, p.content, p.image from product p where p.id = ?',[$id])[0];
        return response()->json(array('product'=> $product), 200);
    }

    public function edit(Request $request) {
        
        $this->validate($request,[
            'catId'=>'required|max:20',
            'title'=>'required|max:200',
            'content'=>'required',
            'id'=>'required'
        ]);
        $catId = $request->input('catId');
        $title = $request->input('title');
        $content = $request->input('content');
        $image = $request->input('image');
        $id = $request->input('id');
        DB::update('update product set cat_id = ?, title = ?, content = ?, image = ? where id = ?',[$catId, $title, $content, $image, $id]);
        return response()->json(array('msg'=> 'success'), 200);
    }

    public function destroy(Request $request) {
        $this->validate($request,[
            'id'=>'required'
        ]);
        $id = $request->input('id');
        $products = DB::select('select p.is_delete from product p where p.id = ?',[$id]);
        if(count($products)<1 || $products[0]->is_delete == false){
            return response()->json(array('msg'=> 'cannot delete this product'), 200);
        }        
        DB::delete('delete from product where id = ?',[$id]);
        return response()->json(array('msg'=> 'success'), 200);
    }
}
