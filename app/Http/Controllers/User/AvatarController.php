<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AvatarRequest;
use App\Services\ImageService;
use Illuminate\Support\Facades\Auth;

/**
 * Class AvatarController
 *
 * @package App\Http\User\Controllers
 */
class AvatarController extends Controller
{
    const USER_IMAGE_PATH = 'images/users/';

    /**
     * @var ImageService
     */
    private $imageService;

    /**
     * AvatarController constructor.
     *
     * @param ImageService $imageService
     */
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;

        $this->middleware(['auth', 'verified']);
    }

    /**
     * @param AvatarRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AvatarRequest $request)
    {
        $this->imageService->store(
            $request->validated(),
            self::USER_IMAGE_PATH . Auth::user()->slug,
            null,
            Auth::id()
        );

        return back()->with('status', 'Avatar successfully changed!');
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        $this->imageService->destroy(
            [$this->imageService->show($id)->id],
            self::USER_IMAGE_PATH . Auth::user()->slug
        );

        return back()->with('status', 'Avatar successfully deleted!');
    }
}
