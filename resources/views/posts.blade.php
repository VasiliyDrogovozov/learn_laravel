
@extends('layouts.main')
@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>
    @foreach($posts as $post)
      <p>{{ $post->id }}.{{ $post->title }}</p>
      <p>{{ $post->content }}</p>
    @endforeach

@endsection
