<?php

namespace App\Modules\Main\UserModule\Services;

use App\Modules\Main\UserModule\User;

class RestoreUserService extends CommonUserService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->restore($id));
    }

    private function restore($id)
    {
        return User::withTrashed()->findOrFail($id)->restore();
    }
}
