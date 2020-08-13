<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class PostController extends Controller
{
    public function index(){
        $hey = "mahdi";
        $posts = DB::table("posts")->get();
        $postcount = DB::table("posts")->count();
        return view("postsindex",compact("hey","posts","postcount"));
    }
}
