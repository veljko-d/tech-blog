<?php

namespace App\Services\Traits;

use App\Repositories\RepositoryInterface;
use Illuminate\Support\Str;

/**
 * Trait SlugTrait
 *
 * @package App\Services\Traits
 */
trait SlugTrait
{
    /**
     * @var RepositoryInterface
     */
    private $repository;

    /**
     * @param RepositoryInterface $repository
     */
    public function setRepository(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $title
     *
     * @return string
     */
    public function getSlug(string $title)
    {
        $slug = Str::slug($title, '-');

        if ($this->repository->show($slug)) {
            $slug .= '-1';

            if ($this->repository->show($slug)) {
                return $this->getSlugWithCounter($slug);
            }

            return $slug;
        }

        return $slug;
    }

    /**
     * @param string $slug
     *
     * @return string
     */
    public function getSlugWithCounter(string $slug)
    {
        $n = substr($slug, -1);
        $slug = substr($slug, 0, -1) . ++$n;

        if ($this->repository->show($slug)) {
            return $this->getSlugWithCounter($slug);
        }

        return $slug;
    }
}
