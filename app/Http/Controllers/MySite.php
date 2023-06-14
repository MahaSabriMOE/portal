<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySite extends Controller
{
    public function index(){
        return view('index');
    }
}
