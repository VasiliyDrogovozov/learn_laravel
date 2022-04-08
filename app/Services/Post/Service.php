<?php

namespace App\Services\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;


class Service
{


    public function store($data)
    {
        try {

            DB::beginTransaction();
            $tags = $data['tags'];
            $category = $data['category'];
            unset($data['tags'], $data['category']);
            $tagIds = $this->getTagIds($tags);

            $data['category_id'] = $this->getCategoryId($category);
            $post = Post::create($data);
            $post->tags()->attach($tagIds);
            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $post;
    }

    public function update($data, $post)
    {
        try {

            DB::beginTransaction();
            $tags = $data['tags'];
            $category = $data['category'];
            unset($data['tags'], $data['category']);
            $tags = $this->getTagIdsWithUpdate($tags);
            $data['category_id'] = $this->getCategoryIdWithUpdate($category);
            $post->update($data);
            $post->tags()->sync($tags);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return $post->fresh();
    }


    private function getTagIds($tags)
    {
        $tagIds = [];
        foreach ($tags as $tag) {
            $tag = !isset($tag['id']) ? Tag::create($tag) : Tag::find($tag['id']);
            $tagIds[] = $tag->id;
        }
        return $tagIds;
    }

    private function getCategoryId($category)
    {
        $category = !isset($category['id']) ? Category::create($category) : Category::find($category['id']);
        return $category->id;
    }

    private function getCategoryIdWithUpdate($category)
    {
        if (!isset($category['id'])) {
            $categoryCurrant = Category::create($category);
        } else {
            $categoryCurrant = Category::find($category['id']);
            $categoryCurrant->update($category);
            $categoryCurrant->fresh();
        }
        return $categoryCurrant->id;
    }

    private function getTagIdsWithUpdate($tags)
    {
        $tagIds = [];
        foreach ($tags as $tag) {
            if (!isset($tag['id'])) {
                $tag = Tag::create($tag);
            } else {
                $currentTag = Tag::find($tag['id']);
                $currentTag->update($tag);
                $tag = $currentTag->fresh();
            }
            $tagIds[] = $tag->id;
        }
        return $tagIds;
    }
}
