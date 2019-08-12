<?php

namespace App\Services;

use App\Repositories\UserRepository;

/**
 * Class UserService
 *
 * @package App\Services
 */
class UserService
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * UserService constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param string $slug
     *
     * @return mixed
     */
    public function show(string $slug)
    {
        return $this->userRepository->show($slug);
    }
}
