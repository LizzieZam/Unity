<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\move;
class mover extends Controller
{
    public function store(Request $request){
        $mover=[];
        $mover['posx']=$request['data']['posx'];
        $mover['posy']=$request['data']['posy'];
        $mover['posz']=$request['data']['posz'];
        $row=\App\move::create($mover);
        return "REGISTRO AGREGADO";
    }
    public function index(){
        $posicion=\App\move::orderBy('id','desc')->first();
        return  $posicion['posx'].";".$posicion['posy'].";".$posicion['posz'];
       
    }
    
}
