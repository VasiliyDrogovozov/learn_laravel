
@extends('layouts.main')
@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>
    <a class="btn btn-primary " href="{{ route('post.create') }}">Add post</a>
    @foreach($posts as $post)
      <p><a href="{{ route('post.show', $post->id)}}">{{ $post->id }}.{{ $post->title }}</a></p>
      <p>{{ $post->content }}</p>
    @endforeach

@endsection
