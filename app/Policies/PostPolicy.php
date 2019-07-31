<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class PostPolicy
 *
 * @package App\Policies
 */
class PostPolicy
{
    use HandlesAuthorization;

    /**
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     *
     * @return mixed
     */
    public function update(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }

    /**
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     *
     * @return mixed
     */
    public function delete(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }

    /**
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     *
     * @return mixed
     */
    public function restore(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }

    /**
     * @param User $user
     * @param Post $post
     *
     * @return bool
     */
    public function forceDelete(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }
}
