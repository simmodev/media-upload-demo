<?php

namespace App\Http\Controllers\PostController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $posts = Post::get();
        return view('dashboard', ['posts'=>$posts]);
    }
}
