<?php

namespace App\Services\Traits;

use Illuminate\Support\Str;

/**
 * Trait SlugTrait
 *
 * @package App\Services\Traits
 */
trait SlugTrait
{
    /**
     * @param string $title
     *
     * @return string
     */
    public function getSlug(string $title)
    {
        $slug = Str::slug($title, '-');

        if ($this->postRepository->show($slug)) {
            $slug .= '-1';

            if ($this->postRepository->show($slug)) {
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

        if ($this->postRepository->show($slug)) {
            return $this->getSlugWithCounter($slug);
        }

        return $slug;
    }
}
