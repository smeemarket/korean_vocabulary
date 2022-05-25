<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vocabularyController extends Controller
{
    public function index(Request $request){
      return view('vocabulary')->with(['kor'=>$request->korean,'mya'=>$request->myanmar]);
    }
}
