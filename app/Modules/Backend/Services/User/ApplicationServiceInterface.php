<?php

namespace App\Modules\Services;

interface ApplicationServiceInterface
{
    /**
     * @param mixed $dto
     * @return mixed
     */
    public function execute($dto = null);
}
