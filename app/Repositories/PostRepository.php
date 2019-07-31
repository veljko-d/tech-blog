<?php

namespace App\Repositories;

use App\Models\Post;

/**
 * Class PostRepository
 *
 * @package App\Repositories
 */
class PostRepository
{
    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index()
    {
        return Post::with(['user:id,name', 'category:id,name,slug', 'comments'])
                   ->paginate(10);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function store(array $data)
    {
        return Post::create($data);
    }

    /**
     * @param string $slug
     *
     * @return mixed
     */
    public function show(string $slug)
    {
        return Post::join('users', 'users.id', '=', 'posts.user_id')
                   ->join('categories', 'categories.id', '=', 'posts.category_id')
                   ->with(['tags:name,slug'])
                   ->select(
                       'posts.*',
                       'users.id as user_id',
                       'users.name as user_name',
                       'categories.id as category_id',
                       'categories.name as category_name',
                       'categories.slug as category_slug'
                   )
                   ->where('posts.slug', $slug)
                   ->first();
    }

    /**
     * @param array  $data
     * @param string $slug
     */
    public function update(array $data, string $slug)
    {
        Post::where('slug', $slug)->update($data);
    }

    /**
     * @param string $slug
     */
    public function destroy(string $slug)
    {
        Post::where('slug', $slug)->delete();
    }
}
