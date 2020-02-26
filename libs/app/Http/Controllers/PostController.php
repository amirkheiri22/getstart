<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $data = [
            'posts' => $posts
        ];
        return view('panel.post.posts')->with($data);
    }

    public function create()
    {
        return view('panel.post.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $save = $post->store($request);
        if ($save) {
            return redirect()->route('post.index');
        } else
            return 'Failed to save';
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $data = [
            'post' => $post,
        ];
        return view('panel.post.edit')->with($data);
    }

    public function update(Request $request)
    {
        $id = $request->postId;
        $post = Post::findOrFail($id);
        $update = $post->edit($request, $post);
        if ($update) {
            return redirect()->route('post.show', $id);
        } else
            return 'Failed to update';
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $data = [
            'post' => $post,
        ];
        return view('panel.post.show')->with($data);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->inActive();
        $post->delete();
        return redirect()->route('post.index');
    }

    public function trash()
    {
        $posts = Post::onlyTrashed()->get();
        $data = [
            'posts' => $posts,
        ];
        return view('Panel.post.trash')->with($data);
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->restore();
        return redirect()->back();
    }

    public function fDelete($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->forceDelete();
        return redirect()->back();
    }

    public function active($id)
    {
        $post = Post::findOrFail($id);
        $post->active();
        return redirect()->back();
    }

    public function inActive($id)
    {
        $post = Post::findOrFail($id);
        $post->inActive();
        return redirect()->back();

    }
}
