<?php

namespace App\Modules\Backend\Services\User;

use App\Modules\Backend\Repositories\User\EloquentUserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use App\Modules\Backend\Services\User\ApplicationServiceInterface;

final class UserService implements ApplicationServiceInterface
{

    protected EloquentUserRepository $repository;

    public function __construct(
        EloquentUserRepository $repository

    ) {
        $this->repository = $repository;
    }

    public function execute($dto = null)
    {
        $users = $this->repository->getAllForPublic();
        return $users;
    }

    public function storeUser($data)
    {
        $response = $this->repository->create($data);
        return $response;
    }

    public function getUserById($id)
    {
        $response = $this->repository->getUserById($id);
        return $response;
    }

    public function update($id, $data)
    {
        $response= $this->repository->updateUser($id,$data);
        return $response;
    }

    public function deleteUser($id)
    {
        return $this->repository->delete([
            'id' => $id
        ]);
    }

}
