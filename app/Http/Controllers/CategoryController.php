<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = DB::select('select id,name from category');
        return view('category',['categories'=>$categories]);
    }

    public function search(Request $request){
        $categories = DB::select('select id,name from category');
        return response()->json(array('categories'=>$categories),200);
    }
    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required|max:50'
        ]);
        $name = $request->input('name');
        DB::insert('insert into category (name) values(?)',[$name]);
        return response()->json(array('msg'=> 'success'), 200);
    }

    public function show(Request $request) {
        $this->validate($request,[
            'id'=>'required'
        ]);
        $id = $request->input('id');
        $category = DB::select('select id,name from category where id = ?',[$id])[0];
        return response()->json(array('category'=> $category), 200);
    }

    public function edit(Request $request) {
        $this->validate($request,[
            'name'=>'required|max:50',
            'id'=>'required'
        ]);
        $name = $request->input('name');
        $id = $id->input('id');
        DB::update('update category set name = ? where id = ?',[$name,$id]);
        return response()->json(array('msg'=> 'success'), 200);
    }

    public function destroy(Request $request) {
        $this->validate($request,[
            'id'=>'required'
        ]);
        $id = $request->input('id');
        DB::delete('delete from category where id = ?',[$id]);
        return response()->json(array('msg'=> 'success'), 200);
    }

}
