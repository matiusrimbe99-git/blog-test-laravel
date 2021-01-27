<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Post $post)
    {

        $data = $post->orderBy('created_at', 'desc')->get();
        return view('blog', compact('data'));
    }
}

