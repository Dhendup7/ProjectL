<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        $data=[
          'name'=>'Dhendup','age'=>17
   ];return view('welcome')->with($data);
    }

    public function nextpage(){

        return view('nextpage');
    }
}
