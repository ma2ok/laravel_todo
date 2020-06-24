@extends('layouts.default')

@section('text', 'Edit Post')

@section('content')
<h1>
  <a href="{{ url('/') }}" class="header-menu">戻る</a>
  編集画面
</h1>
<form method="post" action="{{ url('/posts', $post->id) }}">
  {{ csrf_field() }}
  {{ method_field('patch') }}
  <p>
    <input type="text" name="text" placeholder="enter text" value="{{ old('text', $post->text) }}">
    @if ($errors->has('text'))
    <span class="error">{{ $errors->first('text') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Update">
  </p>
</form>
@endsection