<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\move;
class mover extends Controller
{
    public function store(Request $request){
        $mover=$request->all();
        /*$mover['posx']=$request['posicion']['posx'];
        $mover['posy']=$request['posicion']['posy'];
        $mover['posz']=$request['posicion']['posz'];*/
        return \App\move::create($mover);
    }
    public function index(){
        $posicion=\App\move::orderBy('id','desc')->first();
        return  $posicion['posx'].";".$posicion['posy'].";".$posicion['posz'];
       
    }
    
}
