<?php

namespace App\Modules\Main\UserModule\Services;

use App\Modules\Main\UserModule\User;

class ShowUserService extends CommonUserService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->show($request, $id));
    }

    private function show($request, $id)
    {
        return User::findOrFail($id);
    }
}
