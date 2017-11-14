<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $users = DB::select('select username,email,role,status from user');
        $value = $request->cookie('user');
    
        return  view('user',['users'=>$users,'username'=>$value]);
    }

    public function search(Request $request){
        $users = DB::select('select username,email,role,status from user');
        return response()->json(array('users'=>$users),200);
    }
    public function insert(Request $request){
        $this->validate($request,[
            'username'=>'required|max:50|unique:user',
            'password'=>'required|max:50|min:6',
            'email'=>'required|max:100|email|unique:user',
            'role'=>'required',
            'status'=>'required'
        ]);
        $username = $request->input('username');
        $password = md5($request->input('password'));
        $email = $request->input('email');
        $role = $request->input('role');
        $status = $request->input('status');
        DB::insert('insert into user (username,password,email,role,status) values(?,?,?,?,?)',[$username,$password,$email,$role,$status]);
        return response()->json(array('msg'=> 'success'), 200);
    }
    
    public function show(Request $request) {
        $this->validate($request,[
            'username'=>'required'
        ]);
        $username = $request->input('username');
        $user = DB::select('select username,email,role,status from user where username = ?',[$username])[0];
        return response()->json(array('user'=> $user), 200);
    }

    public function currentShow(Request $request) {
        
        $username = $request->cookie('user');
        $user = DB::select('select username,email,role,status from user where username = ?',[$username])[0];
        return response()->json(array('user'=> $user), 200);
    }

    public function currentEdit(Request $request) {
        $this->validate($request,[
            'email'=>'required|max:100|email',
            'role'=>'required',
            'status'=>'required'
        ]);
        $username = $request->cookie('user');
        $email = $request->input('email');
        $role = $request->input('role');
        $status = $request->input('status');
        DB::update('update user set email = ?, role=?, status =? where username = ?',[$email,$role, $status ,$username]);
        return response()->json(array('msg'=> 'success'), 200);
    }

    public function edit(Request $request) {
        $this->validate($request,[
            'username'=>'required',
            'email'=>'required|max:100|email',
            'role'=>'required',
            'status'=>'required'
        ]);
        $username = $request->input('username');
        $email = $request->input('email');
        $role = $request->input('role');
        $status = $request->input('status');
        DB::update('update user set email = ?, role=?, status =? where username = ?',[$email,$role, $status ,$username]);
        return response()->json(array('msg'=> 'success'), 200);
    }

    public function destroy(Request $request) {
        $this->validate($request,[
            'username'=>'required'
        ]);
        $username = $request->input('username');
        DB::delete('delete from user where username = ?',[$username]);
        return response()->json(array('msg'=> 'success'), 200);
    }

    public function change(Request $request) {
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required|max:50|min:6',
            'repassword'=>'required|max:50|min:6'
        ]);
        $password = $request->input('password');
        $repassword = $request->input('repassword');
        if($repassword != $password){
            return response()->json(array('msg'=> 'fail'), 200);
        }
        $hashed_random_password = md5($password);
        $username = $request->input('username');
        DB::update('update user set password = ? where username= ?',[$hashed_random_password ,$username]);
        return response()->json(array('msg'=> 'success'), 200);
    }

    public function currentChange(Request $request) {
        $this->validate($request,[
            'password'=>'required|max:50|min:6',
            'repassword'=>'required|max:50|min:6'
        ]);
        $password = $request->input('password');
        $repassword = $request->input('repassword');
        if($repassword != $password){
            return response()->json(array('msg'=> 'fail'), 200);
        }
        $hashed_random_password = md5($password);
        $username = $request->cookie('user');
        DB::update('update user set password = ? where username= ?',[$hashed_random_password ,$username]);
        return response()->json(array('msg'=> 'success'), 200);
    }
}
