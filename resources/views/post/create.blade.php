
@extends('layouts.main')
@section('title', 'Create post')


@section('content')
<form method="post" action="{{ route('post.store') }}">
  @csrf

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
  </div>

  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea class="form-control" id="content" name="content" placeholder="Content"></textarea>
  </div>

  <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="text" class="form-control" name="image" id="image" placeholder="Image">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
