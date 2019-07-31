<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;

/**
 * Class CategoryController
 *
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * @var CategoryService
     */
    private $categoryService;

    /**
     * CategoryController constructor.
     *
     * @param CategoryService $categoryService
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;

        $this->middleware(['auth', 'verified'])->except(['index', 'show',]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->categoryService->index();

        return view('posts.index', compact('posts'));
    }
}
