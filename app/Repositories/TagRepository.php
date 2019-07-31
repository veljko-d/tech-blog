<?php

namespace App\Repositories;

use App\Models\Tag;

/**
 * Class TagRepository
 *
 * @package App\Repositories
 */
class TagRepository
{
    /**
     * @param array $data
     */
    public function store(array $data)
    {
        Tag::create($data);
    }

    /**
     * @param string $slug
     *
     * @return mixed
     */
    public function show(string $slug)
    {
        return Tag::where('slug', $slug)->first();
    }
}
