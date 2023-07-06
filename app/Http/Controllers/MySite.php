<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use JavaScript;

class MySite extends Controller
{
    public function index(){

       $postsCount=Post::all()->count();
       $Myposts=Post::all();
//dd($Myposts);
       return view('index',compact('postsCount','Myposts'));
        

    }

   
}
