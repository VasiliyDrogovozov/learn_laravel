<?php

namespace App\Http\Controllers\Post;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Category;



class CreateController extends BaseController
{
    public function __invoke() {
      $tags = Tag::all();
      $categories = Category::all();
      return view('post.create', compact('categories', 'tags'));
    }
}
