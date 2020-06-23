@extends('layouts.default')

{{--
@section('title')
Todo List
@endsection
--}}

@section('title', 'Blog Posts')

@section('content')
<h1>Todo List</h1>
<ul>
  @forelse ($posts as $post)
  <li><a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a></li>
  @empty
  <li>No posts yet</li>
  @endforelse
</ul>
@endsection