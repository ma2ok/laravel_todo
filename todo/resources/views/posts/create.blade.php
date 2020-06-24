@extends('layouts.default')

@section('text', 'New Post')

@section('content')
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <input type="text" name="text" placeholder="enter text" value="{{ old('text') }}">
    @if ($errors->has('text'))
    <span class="error">{{ $errors->first('text') }}</span>
    @endif
  <p>
    <input type="submit" value="Add">
  </p>
</form>
@endsection