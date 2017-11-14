<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;

class Login extends Controller
{
    public function index(Request $request){
           
        $value = $request->cookie('user');
        if($value) {
            return  \Redirect::to('admin/dashboard');            
        }
        $status = $request->input('status');
        $message = '';
        if($status == 'fail'){
            $message = 'user and password is not correct';
        }
        
        echo $status;
        return view('login',['message'=>$message]);
    }

    public function login(Request $request){
        
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required'
        ]);
        $username = $request->input('username');
        $password = md5($request->input('password'));

      
        $users = DB::select('select username,email,role,status from user where password = ? and username = ?' ,[$password,$username]);
        $result = count($users);
        if($result == 1){
            return \Redirect::to('admin/dashboard')->withCookie(cookie('user', $users[0]->username, 15));
        }else{
            return \Redirect::action('Login@index',['status'=> 'fail']);    
        }   
    }

    public function dashboard(Request $request){
        $value = $request->cookie('user');
        return view('dashboard',['username'=>  $value]);
    }

    public function logout(Request $request){
        $message = '';
        \Cookie::queue(Cookie::forget('user'));
        return view('login',['message'=>$message]);
    }
}
