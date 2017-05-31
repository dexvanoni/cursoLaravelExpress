<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index($nome){
    $name = $nome;
    return view('test.index', ['nome'=>$name]);
  }

  public function notas(){
    $name = 'Denis';
    $nota = 10;
    return view('test.notas', [
      'name'=>$name,
      'nota'=>$nota
    ]);
  }
}
