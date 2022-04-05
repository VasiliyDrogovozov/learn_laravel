
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

  <div class="mb-3">
    <label class="form-label" for="category">Category</label>
    <select class="form-select" aria-label="Default select example" id="category" name="category_id">
      @foreach($categories as $category)
        <option

          {{ $post->category->id == $category->id ? 'selected' : ''  }}

         value="{{ $category->id }}">{{ $category->title }}</option>
      @endforeach
    </select>
  </div>


  <div class="mb-3">
    <select class="form-select" multiple aria-label="multiple select example" name='tags[]'>
      @foreach($tags as $tag)
        <option
        @foreach($post->tags as $tagPost)
          {{ $tagPost->id === $tag->id ? 'selected' : '' }}
        @endforeach
          value="{{ $tag->id }}">{{ $tag->title }}</option>
      @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
