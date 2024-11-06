<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //
    public function index(){
        
        return view("index");
    }

    public function create(){
       
       return view("create");
    }

    public function help($name_game, $categoria=null){
        $date = now();
        return view("show",["name"=>$name_game,
                                        "categoria"=>$categoria,
                                        "fecha"=> $date]);

        
    }
}
