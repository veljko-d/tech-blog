<?php

namespace App\Services;

use App\Repositories\ImageRepository;
use Illuminate\Support\Facades\Storage;

/**
 * Class ImageService
 *
 * @package App\Services
 */
class ImageService
{
    /**
     * @var ImageRepository
     */
    private $imageRepository;

    /**
     * ImageService constructor.
     *
     * @param ImageRepository $imageRepository
     */
    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    /**
     * @param array    $images
     * @param string   $path
     * @param int|null $postId
     * @param int|null $userId
     */
    public function store(
        array $images,
        string $path,
        int $postId = null,
        int $userId = null
    ) {
        foreach ($images as $image) {
            $storedPath = Storage::putFile($path, $image);

            $image = [
                'name'    => pathinfo($storedPath, PATHINFO_FILENAME),
                'ext'     => pathinfo($storedPath, PATHINFO_EXTENSION),
                'path'    => pathinfo($storedPath, PATHINFO_DIRNAME),
                'size'    => Storage::size($storedPath),
                'post_id' => $postId,
                'user_id' => $userId,
            ];

            $this->imageRepository->store($image);
        }
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function show(int $id)
    {
        return $this->imageRepository->show($id);
    }

    /**
     * @param array  $images
     * @param string $folderPath
     */
    public function destroy(array $images, string $folderPath)
    {
        Storage::deleteDirectory($folderPath);

        foreach ($images as $image) {
            $this->imageRepository->destroy($image);
        }
    }
}
