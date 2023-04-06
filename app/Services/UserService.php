<?php

namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService {

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->userRepository = $userRepositoryInterface;
    }

    public function store(array $data)
    {
        return $this->userRepository->create($data);
    }

}