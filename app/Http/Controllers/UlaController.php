<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlaController extends Controller
{
    public function test() {

        $pessoas = [
            [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),  
                'nome' => 'Alessandro', 
                'birth' => '29/01/90', 
                'idade' => 29],
  
              [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Bonieky','wendel'.rand(0,1) ,
                'birth' => '10/11/1933', 
                'idade' => 90],
  
              [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Maria', 
                'birth' => '01/01/2020', 
                'idade' => 2]
        ];

        $dados['pessoas'] = $pessoas;
    
        return view('test', $dados);
    }
    public function test2(){
      
      $pessoas = [
        [ 
            'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),  
            'nome' => 'Alessandro', 
            'birth' => '29/01/90', 
            'idade' => 29],

          [ 
            'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
            'nome' => 'Bonieky','wendel'.rand(0,1) ,
            'birth' => '10/11/1933', 
            'idade' => 90],

          [ 
            'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
            'nome' => 'Maria', 
            'birth' => '01/01/2020', 
            'idade' => 2]
          ];

           $dados['pessoas'] = $pessoas;

        return view('test2',$dados);
    }
    public function sair(){
      
      $numero = 1;


      $url = 'https://i.pravatar.cc/150?img='.$numero;


      $dados['url']=$url;


        return view('sair',$dados);
    }

}
