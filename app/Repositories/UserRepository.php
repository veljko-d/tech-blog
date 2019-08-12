<?php

namespace App\Repositories;

use App\Models\User;

/**
 * Class UserRepository
 *
 * @package App\Repositories
 */
class UserRepository
{
    /**
     * @param string $slug
     *
     * @return mixed
     */
    public function show(string $slug)
    {
        return User::with('image')->where('slug', $slug)->first();
    }
}
