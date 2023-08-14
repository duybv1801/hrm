<?php
namespace App\Services;

use App\Repositories\UserRepository;

class RegisterService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function registerUser(array $userData)
    {
        return $this->userRepository->create($userData);
    }
     public function getAllSettings()
    {
        return $this->userRepository->all();
    }

}