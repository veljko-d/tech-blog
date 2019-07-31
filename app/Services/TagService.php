<?php

namespace App\Services;

use App\Repositories\TagRepository;
use Illuminate\Support\Str;

/**
 * Class TagService
 *
 * @package App\Services
 */
class TagService
{
    /**
     * @var TagRepository
     */
    private $tagRepository;

    /**
     * TagService constructor.
     *
     * @param TagRepository $tagRepository
     */
    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * @param string $slug
     *
     * @return mixed
     */
    public function index(string $slug)
    {
        $tag = $this->show($slug);

        return $tag->posts()
            ->with(['user:id,name', 'category:id,name', 'comments'])
            ->paginate(10);
    }

    /**
     * @param string $data
     *
     * @return array
     */
    public function store(string $data)
    {
        $tags = explode(';', $data);
        $tagIds = [];

        foreach ($tags as $tag) {
            if (empty($tag)) {
                continue;
            }

            $slug = Str::slug($tag, '-');

            if (!$this->tagRepository->show($slug)) {
                $this->tagRepository->store(['name' => trim($tag), 'slug' => $slug]);
            }

            $tagIds[] = $this->tagRepository->show($slug)->id;
        }

        return $tagIds;
    }

    /**
     * @param string $slug
     *
     * @return mixed|void
     */
    public function show(string $slug)
    {
        $tag = $this->tagRepository->show($slug);

        return $tag ? $tag : abort(404);
    }
}
