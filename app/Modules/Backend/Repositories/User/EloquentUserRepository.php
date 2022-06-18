<?php

namespace App\Modules\Repositories;

use App\Models\User;

class EloquentUserRepository
{
    private User $model;

    public function __construct(
        User $model
    ) {
        $this->model = $model;
    }

    public function getAllForPublic($limit = 5)
    {
        return $this->model->newQuery()

            ->get();
    }

    public function create(array $data)
    {
        $model = $this->model->newQuery()
            ->firstOrCreate($data);
        return $model->id;
    }

    public function delete($id){
        return $this->model->destroy($id);
    }
}
