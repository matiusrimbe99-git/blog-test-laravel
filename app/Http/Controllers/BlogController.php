<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(Post $post)
    {
        $databerita = $post->orderBy('created_at', 'desc')->where('category_id', 1)->paginate(3);
        $data = $post->orderBy('created_at', 'desc')->paginate(3);
        return view('blog', compact('data', 'databerita'));
    }

    public function isiPost($slug)
    {
        $data = Post::where('slug', $slug)->get();
        return view('blog.isi-post', compact('data'));
    }
}
