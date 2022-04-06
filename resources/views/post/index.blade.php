
@extends('layouts.main')
@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>
    <a class="btn btn-primary " href="{{ route('post.create') }}">Add post</a>
    <div class="mt-2">
      @foreach($posts as $post)
      <div class="border border-dark mt-2 p-3">
        <p><a href="{{ route('post.show', $post->id)}}">{{ $post->id }}.{{ $post->title }}</a></p>
        <p>Content: {{ $post->content }}</p>
        <p>Category: {{ $post->category->title }}</p>
        <p>
          Tags:
          @foreach($post->tags as $tag)
            {{ $tag->title }},
          @endforeach
        </p>
      </div>
      @endforeach
    </div>
    <div class="mt-3">
      {{ $posts->withQueryString()->links() }}
    </div>
@endsection
