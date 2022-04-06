
@extends('layouts.main')
@section('title', 'Post')


@section('content')
  <p><img src="{{$post->image}}" alt="imageNoConnect"></p>
  <p>{{$post->id}}. {{$post->title}}</p>
  <p>Content: {{$post->content}}</p>
  <a class="btn btn-dark" href="{{ route('post.index') }}">Back</a>
  <a class="btn btn-dark" href="{{ route('post.edit', $post->id) }}">Edit</a>
  <form action="{{ route('post.destroy', $post->id) }}" method="post">
    @csrf
    @method('delete')
      <button type="submit" class="btn btn-danger">Delete</button>
  </form>
@endsection
