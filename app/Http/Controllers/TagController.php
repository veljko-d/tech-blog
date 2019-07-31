<?php

namespace App\Http\Controllers;

use App\Services\TagService;

/**
 * Class TagController
 *
 * @package App\Http\Controllers
 */
class TagController extends Controller
{
    /**
     * @var TagService
     */
    private $tagService;

    /**
     * TagController constructor.
     *
     * @param TagService $tagService
     */
    public function __construct(TagService $tagService)
    {
        $this->tagService = $tagService;

        $this->middleware(['auth', 'verified'])->except(['index', 'show',]);
    }

    /**
     * @param string $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(string $slug)
    {
        $posts = $this->tagService->index($slug);

        return view('posts.index', compact('posts'));
    }
}
