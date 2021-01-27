<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(Post $post)
    {
        $databerita = $post->latest()->where('category_id', 1)->take(3)->get();
        $data = $post->latest()->take(5)->get();
        return view('blog', compact('data', 'databerita'));
    }

    public function isiPost(Post $post, $slug)
    {
        $databerita = $post->latest()->where('category_id', 1)->take(3)->get();
        $data = Post::where('slug', $slug)->get();
        return view('blog.isi-post', compact('data','databerita'));
    }

    public function listpost(Post $post)
    {
        $databerita = $post->latest()->where('category_id', 1)->take(3)->get();
        $data = $post->latest()->paginate(6);
        return view('blog.list-post', compact('data', 'databerita'));
    }
}
