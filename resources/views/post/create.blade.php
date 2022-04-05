
@extends('layouts.main')
@section('title', 'Create post')


@section('content')
<form method="post" action="{{ route('post.store') }}">
  @csrf

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" value="{{ old('title') }}" class="form-control" name="title" id="title" placeholder="Title">
    @error('title')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea class="form-control" id="content" name="content" placeholder="Content">{{ old('content') }}</textarea>
    @error('content')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="text" value="{{ old('image') }}" class="form-control" name="image" id="image" placeholder="Image">
    @error('image')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label" for="category">Category</label>
    <select class="form-select" aria-label="Default select example" id="category" name="category_id">

      @foreach($categories as $category)
        <option
        {{ old('category_id') == $category->id ? 'selected' : '' }}
         value="{{ $category->id }}">{{ $category->title }}</option>
      @endforeach
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label" for="tags">Tags</label>
    <select class="form-select" id="tags" multiple aria-label="multiple select example" name='tags[]'>
      @foreach($tags as $tag)
        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
      @endforeach
    </select>
    @error('tags')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
