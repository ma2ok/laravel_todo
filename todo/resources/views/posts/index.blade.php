<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Todo List</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
    <h1>Todo List</h1>
    <ul>
      {{--
      @foreach ($posts as $post)
      <li><a href="">{{ $post->title }}</a></li>
      @endforeach
      --}}
      @forelse ($posts as $post)
      <!-- <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li> -->
      <!-- <li><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a></li> -->
      <!-- <li><a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></li> -->
      <li><a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a></li>
      @empty
      <li>No posts yet</li>
      @endforelse
    </ul>
  </div>
</body>
</html>