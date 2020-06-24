@extends('layouts.default')

@section('text', 'TodoList')

@section('content')
<h1>
  Todo List
<!-- 入力場所 -->
  <form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="text" placeholder="enter text">
    <input type="submit" value="追加">
  </p>
</form>
<!-- ここまで -->
</h1>
<ul>
  @forelse ($posts as $post)
  <li>
    <a href="{{ action('PostsController@show', $post) }}">{{ $post->text }}</a>
    <a href="{{ action('PostsController@edit', $post) }}" class="edit"><button type="button">編集</button>
    </a>
  </li>
  @empty
  <li>No posts yet</li>
  @endforelse
</ul>
@endsection