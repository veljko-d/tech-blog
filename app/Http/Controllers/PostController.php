<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Services\CategoryService;
use App\Services\ImageService;
use App\Services\PostService;
use App\Services\TagService;

/**
 * Class PostController
 *
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    const POST_IMAGES_PATH = 'images/posts/';

    /**
     * @var PostService
     */
    private $postService;

    /**
     * @var CategoryService
     */
    private $categoryService;

    /**
     * @var TagService
     */
    private $tagService;

    /**
     * @var ImageService
     */
    private $imageService;

    /**
     * PostController constructor.
     *
     * @param PostService     $postService
     * @param CategoryService $categoryService
     * @param TagService      $tagService
     * @param ImageService    $imageService
     */
    public function __construct(
        PostService $postService,
        CategoryService $categoryService,
        TagService $tagService,
        ImageService $imageService
    )
    {
        $this->postService = $postService;
        $this->categoryService = $categoryService;
        $this->tagService = $tagService;
        $this->imageService = $imageService;

        $this->middleware(['auth', 'verified'])->except(['index', 'show',]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->postService->index();

        return view('posts.index', compact('posts'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = $this->categoryService->index();

        return view('posts.create', compact('categories'));
    }

    /**
     * @param StorePostRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StorePostRequest $request)
    {
        $post = $this->postService->store($request->validated());
        $tagIds = $this->tagService->store($request->validated()['tags']);

        if (isset($request->validated()['images'])) {
            $this->imageService->store(
                $request->validated()['images'],
                self::POST_IMAGES_PATH . $post->slug,
                $post->id
            );
        }

        $post->tags()->attach($tagIds);

        return redirect('posts')->with('status', 'Post successfully created!');
    }

    /**
     * @param string $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $slug)
    {
        $post = $this->postService->show($slug);

        return view('posts.show', compact('post'));
    }

    /**
     * @param string $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(string $slug)
    {
        $post = $this->postService->show($slug);
        $categories = $this->categoryService->index();

        return view('posts.edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * @param UpdatePostRequest $request
     * @param string            $slug
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdatePostRequest $request, string $slug)
    {
        $this->postService->update($request->validated(), $slug);
        $tagIds = $this->tagService->update($request->validated()['tags']);

        return redirect('posts')->with('status', 'Post successfully edited!');
    }

    /**
     * @param string $slug
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(string $slug)
    {
        $post = $this->postService->show($slug);
        $this->imageService->destroy(
            $post->images->pluck('id')->toArray(),
            self::POST_IMAGES_PATH . $post->slug
        );
        $this->postService->destroy($slug);

        return redirect('posts')->with('status', 'Post successfully deleted!');
    }
}
