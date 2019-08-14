<?php

namespace App\Services;

use App\Repositories\PostRepository;
use App\Services\Traits\SlugTrait;
use Illuminate\Support\Facades\Auth;

/**
 * Class PostService
 *
 * @package App\Services
 */
class PostService
{
    use SlugTrait;

    /**
     * @var PostRepository
     */
    private $postRepository;

    /**
     * PostService constructor.
     *
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index()
    {
        return $this->postRepository->index();
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function store(array $data)
    {
        $this->setRepository($this->postRepository);

        $data["user_id"] = Auth::id();
        $data["slug"] = $this->getSlug($data['title']);

        return $this->postRepository->store($data);
    }

    /**
     * @param string $slug
     *
     * @return mixed|void
     */
    public function show(string $slug)
    {
        $post = $this->postRepository->show($slug);

        return $post ? $post : abort(404);
    }

    /**
     * @param array  $data
     * @param string $slug
     */
    public function update(array $data, string $slug)
    {
        if ($data['title'] !== $this->postRepository->show($slug)->title) {
            $data["slug"] = $this->getSlug($data['title']);
        }

        $this->postRepository->update($data, $slug);
    }

    /**
     * @param string $slug
     */
    public function destroy(string $slug)
    {
        $this->postRepository->destroy($slug);
    }
}
