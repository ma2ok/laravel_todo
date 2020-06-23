@extends('layouts.default')

@section('text', 'New Post')

@section('content')
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="text" placeholder="enter text">
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>
@endsection