<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Todo List</title>
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
      <li><a href="">{{ $post->title }}</a></li>
      @empty
      <li>No posts yet</li>
      @endforelse
    </ul>
  </div>
</body>
</html>