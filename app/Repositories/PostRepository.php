<?php

namespace App\Repositories;

use App\Post;
use App\Category;
use App\User;

class PostRepository
{
    public function all()
    {
        return Post::active()->with('user', 'categories')->orderBy('created_at', 'desc')->get();
    }

    public function postedIn($category_name)
    {
        $category = Category::where('name', $category_name)->first();
        return $category->posts()->active()->with('user', 'categories')->orderBy('created_at', 'desc')->get();
    }
}
