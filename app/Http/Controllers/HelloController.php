<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HelloController extends Controller
{
    function showHello(){
       return '<h1>Hello Controller : Wanwisa</h1>';
    }
}
