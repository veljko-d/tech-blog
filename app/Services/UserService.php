<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\Traits\SlugTrait;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserService
 *
 * @package App\Services
 */
class UserService
{
    use SlugTrait;

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
        $user = $this->userRepository->show($slug);

        return $user ? $user : abort(404);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function store(array $data)
    {
        $this->setRepository($this->userRepository);

        $data = [
            'name'     => $data['name'],
            'slug'     => $this->getSlug($data['name']),
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ];

        return $this->userRepository->store($data);
    }
}
