<?php

namespace App\Modules\Main\UserModule\Services;

use App\Modules\Main\UserModule\User;

class StoreUserService extends CommonUserService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->store($request), true);
    }

    private function store($request)
    {
        return User::create([]);
    }
}
