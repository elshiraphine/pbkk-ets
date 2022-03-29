<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('addForm');
    }

    public function store(Request $request){
        $post = new Post;
    }
}
