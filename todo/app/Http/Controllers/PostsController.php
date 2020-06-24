<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
      $posts = Post::latest()->get();
      return view('posts.index')->with('posts', $posts);
    }

    public function show(Post $post) {
      return view('posts.show')->with('post', $post);
    }

    public function create() {
      return view('posts.create');
    }

    public function store(Request $request) {
      $this->validate($request, [
        'text' => 'required',
      ]);
      $post = new Post();
      $post->text = $request->text;
      $post->save();
      return redirect('/');
    }

    public function edit(Post $post) {
      return view('posts.edit')->with('post', $post);
    }

    public function update(Request $request, Post $post) {
      $this->validate($request, [
        'text' => 'required',
      ]);
      $post->text = $request->text;
      $post->save();
      return redirect('/');
    }

    public function destroy(Post $post) {
      $post->delete();
      return redirect('/');
    }

}