<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $services = DB::select('select p.id, p.title, p.content, p.image from product p where p.cat_id = 2 order by p.id desc LIMIT 3');
        $highlights = DB::select('select p.id, p.title, p.content, p.image from product p where p.cat_id = 3 order by p.id desc LIMIT 9');
        $informations = DB::select('select p.id, p.title, p.content, p.image from product p where p.cat_id = 5 order by p.id desc LIMIT 4');
        return view('index',['services'=>$services,'highlights'=>$highlights,'informations'=>$informations]);
    }

}
