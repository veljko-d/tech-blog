<?php

namespace App\Repositories;

use App\Models\Category;

/**
 * Class CategoryRepository
 *
 * @package App\Repositories
 */
class CategoryRepository
{
    /**
     * @return Category[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * @param array $data
     */
    public function store(array $data)
    {
        Category::create($data);
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function show(int $id)
    {
        return Category::where('id', $id)->get();
    }

    /**
     * @param array $data
     * @param int   $id
     */
    public function update(array $data, int $id)
    {
        Category::where('id', $id)->update($data);
    }

    /**
     * @param int $id
     */
    public function destroy(int $id)
    {
        Category::destroy($id);
    }
}
