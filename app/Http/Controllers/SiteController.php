<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $idade='18';
        $nome='Wendel';
        $nome2='sales';

        $data=[
            'apelido'=>$nome,
            'apelido2'=>$nome2, 
            'idade' =>$idade
        ];

        return view('bemvindo',$data);
    }
  
    
    public function user(Request $request){
        $data= [
        'quantidade'=>$request->qnt
        ];
        return view('usuarios',$data);
    }
}