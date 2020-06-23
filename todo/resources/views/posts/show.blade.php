@extends('layouts.default')

@section('text', $post->text)

@section('content')
<p>{!! nl2br(e($post->body)) !!}</p>
@endsection