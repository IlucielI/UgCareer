<?php

namespace App\Modules\Backend\Services\User;

interface ApplicationServiceInterface
{
    /**
     * @param mixed $dto
     * @return mixed
     */
    public function execute($dto = null);
}
