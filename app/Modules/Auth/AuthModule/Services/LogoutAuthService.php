<?php

namespace App\Modules\Auth\AuthModule\Services;

use App\Modules\Auth\AuthModule\Auth;

class LogoutAuthService extends CommonAuthService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->logout($id));
    }

    private function logout($id)
    {
        return Auth::withTrashed()->findOrFail($id)->restore();
    }
}
