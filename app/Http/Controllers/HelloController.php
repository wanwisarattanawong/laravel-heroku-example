<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function show(){
      return view('users')
      ->with('name','wanwisarattanawong')
      ->with('title','Laravel tutorial');
  }
}
