<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $oshgool = ["oskol"=>'osskool',
                    'ahmagh'=>'khar'
    ];
        return view('index',compact("oshgool"));
    }

    public function welcome(){
        $asshole =['asshole1'=>'asshole2'];
        return view('welcome',$asshole);
    }

    public function article($id){
        return view('article', compact('id'));
    }
}
