<?php
namespace App\Services;

use App\Repositories\UserRepository;

class ManagerStaffService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(array $userData)
    {
        return $this->userRepository->create($userData);
    }
     public function read()
    {
        return $this->userRepository->all();
    }

    public function find($id)
    {
        return $this->userRepository->find($id);
    }

    public function update($data, $id)
    {
        $this->userRepository->update($data, $id);
    }

    public function delete($id)
    {
        $this->userRepository->delete($id);
    }

}