<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(Post $post)
    {
        $category_widget = Category::all();
        $data = $post->latest()->take(5)->get();
        return view('blog', compact('data', 'category_widget'));
    }

    public function isiPost(Post $post, $slug)
    {
        $category_widget = Category::all();
        $data = Post::where('slug', $slug)->get();
        return view('blog.isi-post', compact('data', 'category_widget'));
    }

    public function listPost(Post $post)
    {
        $category_widget = Category::all();
        $data = $post->latest()->paginate(6);
        return view('blog.list-post', compact('data', 'category_widget'));
    }

    public function listCategory(category $category)
    {
        $category_widget = Category::all();
        $data = $category->posts()->latest()->paginate(6);
        return view('blog.data-category', compact('data', 'category_widget'));
    }
}
