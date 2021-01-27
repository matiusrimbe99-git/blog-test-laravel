<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tag::all();
        $categories = Category::all();
        return view('admin.post.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $image = $request->image;
        $new_image = time() . $image->getClientOriginalName();
        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'users_id'=>Auth::id(),
            'category_id' => $request->category_id,
            'content' => $request->content,
            'image' => 'uploads/posts/' . $new_image,
        ]);

        $post->tags()->attach($request->tags);

        $image->move('uploads/posts/', $new_image);
        return redirect()->back()->with('success', 'Postingan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $tags = Tag::all();
        $categories = Category::all();

        return view('admin.post.edit',compact('post','tags','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ]);

        $post=Post::findOrFail($id);

        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time() . $image->getClientOriginalName();
            $image->move('uploads/posts/', $new_image);

            $post_data = [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'category_id' => $request->category_id,
                'content' => $request->content,
                'image' => 'uploads/posts/' . $new_image,
            ];
        } else {
            $post_data = [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'category_id' => $request->category_id,
                'content' => $request->content,
            ];
        }

        $post->tags()->sync($request->tags);
        $post->update($post_data);
        return redirect()->route('post.index')->with('success', 'Postingan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back()->with('success','Postingan dipindahkan ke Daftar Sampah Postingan');
    }

    public function viewTrash()
    {
        $posts=Post::onlyTrashed()->paginate(10);
        return view('admin.post.trash', compact('posts'));
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return redirect()->back()->with('success', 'Postingan berhasil direstore ke Daftar Postingan');
    }

    public function delete($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        return redirect()->back()->with('success', 'Postingan berhasil dihapus permanen');
    }
}
