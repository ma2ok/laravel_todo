@extends('layouts.default')

@section('text', 'TodoList')

@section('content')
<h1>
  Todo List
<!-- 入力場所 -->
  <form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <!-- <p>
    <input type="text" name="text" placeholder="予定を入力してください"> -->
    <p>
    <input type="text" name="text" placeholder="予定を入力してください" value="{{ old('text') }}">
    <input type="submit" value="追加">
    @if ($errors->has('text'))
    <p>
    <span class="error">{{ $errors->first('text') }}</span>
    </p>
    @endif
  </p>
</form>
<!-- ここまで -->
</h1>
<ul>
  @forelse ($posts as $post)
  <li>
    <a>{{ $post->text }}</a>
    <a href="{{ action('PostsController@edit', $post) }}" class="edit">
    <button type="button">編集</button></a>
    <a href="#" class="del" data-id="{{ $post->id }}"><button type="button">削除</button></a></a>
    <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </li>
  @empty
  <li>データが入っていません</li>
  @endforelse
</ul>
<script src="/js/main.js"></script>
@endsection