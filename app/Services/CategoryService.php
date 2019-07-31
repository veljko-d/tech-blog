<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

/**
 * Class CategoryService
 *
 * @package App\Services
 */
class CategoryService
{
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * CategoryService constructor.
     *
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->categoryRepository->index();
    }

    /**
     * @param array $data
     */
    public function store(array $data)
    {
        $this->categoryRepository->store($data);
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function show(int $id)
    {
        return $this->categoryRepository->show($id);
    }

    /**
     * @param array $data
     * @param int   $id
     */
    public function update(array $data, int $id)
    {
        $this->categoryRepository->update($data, $id);
    }

    /**
     * @param int $id
     */
    public function destroy(int $id)
    {
        $this->categoryRepository->destroy($id);
    }
}
