
@extends('layouts.main')
@section('title', 'Edit post')


@section('content')
<form method="post" action="{{ route('post.update', $post->id) }}">
  @csrf
  @method('patch')

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" value="{{ $post->title }}" class="form-control" name="title" id="title" placeholder="Title">
  </div>

  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea class="form-control" id="content" name="content" placeholder="Content">{{ $post->content }}</textarea>
  </div>

  <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="text" class="form-control" value="{{ $post->image }}" name="image" id="image" placeholder="Image">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
