<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('postAll', [
            "title" => "Rekam Medis Page",
            "articles" => Post::all()
        ]);
    }

    public function content(Post $post){
        return view('content', [
            "post" => $post
        ]);
    }
}
