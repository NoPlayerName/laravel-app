<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {


        return view('post.index', [
            'tittle' => "Halaman Post",
            'post' => Post::all()
        ]);
    }


    public function posts(Post $post)
    {

        return view('post.posts', [
            'tittle' => "Halaman Post Utama",
            'post' => $post
        ]);
    }
}