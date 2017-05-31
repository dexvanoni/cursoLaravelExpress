<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index($nome){

    return view('test.index', ['nome'=>$nome]);
  }

  public function notas($name){
    $name = 'Denis';
    $nota = 10;
    return view('test.notas', [
      'name'=>$name,
      'nota'=>$nota
    ]);
  }
}
