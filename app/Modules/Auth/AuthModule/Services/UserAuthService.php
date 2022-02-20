<?php

namespace App\Modules\Auth\AuthModule\Services;

use App\Modules\Main\UserModule\User;

class UserAuthService extends CommonAuthService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->user($request));
    }

    private function user($request)
    {
        return User::findOrFail($request->user()->id);
    }
}
