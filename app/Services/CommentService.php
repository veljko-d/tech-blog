<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Auth;

/**
 * Class CommentService
 *
 * @package App\Services
 */
class CommentService
{
    /**
     * @var PostRepository
     */
    private $postRepository;

    /**
     * CommentService constructor.
     *
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @param array  $data
     * @param string $slug
     *
     * @return mixed
     */
    public function store(array $data, string $slug)
    {
        $data["user_id"] = Auth::id();

        $post = $this->postRepository->show($slug);

        return $post->addComment($data);
    }
}
