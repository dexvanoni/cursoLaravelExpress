<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsAdminController extends Controller
{
    public function index(){
        return view('admin.posts.index');
    }
}
