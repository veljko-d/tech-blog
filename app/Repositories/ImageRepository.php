<?php

namespace App\Repositories;

use App\Models\Image;

/**
 * Class ImageRepository
 *
 * @package App\Repositories
 */
class ImageRepository implements RepositoryInterface
{
    /**
     * @param array $data
     *
     * @return mixed
     */
    public function store(array $data)
    {
        return Image::create($data);
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function show(int $id)
    {
        return Image::findOrFail($id);
    }

    /**
     * @param int $id
     */
    public function destroy(int $id)
    {
        Image::destroy($id);
    }
}
