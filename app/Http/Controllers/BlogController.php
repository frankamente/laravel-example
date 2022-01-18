<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::get()->reverse();
        return view('blog', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post', compact('post'));
    }

    public function delete(int $problem_id)
    {
        $post = Post::find($problem_id);
        $post->delete();
        return redirect('blog')->with('status', 'Post eliminado correctamente.');
    }

    public function save(Request $request)
    {
        $post = Post::factory()->make([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
        ]);
        $post->save();
        return redirect('blog')->with('status', 'Nuevo Post insertado correctamente.');
    }
}
