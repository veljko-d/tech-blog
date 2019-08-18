<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Services\CommentService;

/**
 * Class CommentController
 *
 * @package App\Http\Controllers
 */
class CommentController extends Controller
{
    /**
     * @var CommentService
     */
    private $commentService;

    /**
     * CommentController constructor.
     *
     * @param CommentService $commentService
     */
    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;

        $this->middleware(['auth', 'verified']);
    }

    /**
     * @param CommentRequest $request
     * @param string         $slug
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CommentRequest $request, string $slug)
    {
        $this->commentService->store($request->validated(), $slug);

        return back()->with('status', 'Comment successfully added!');
    }
}
