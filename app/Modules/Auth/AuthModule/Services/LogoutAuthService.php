<?php

namespace App\Modules\Auth\AuthModule\Services;

class LogoutAuthService extends CommonAuthService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->logout($request));
    }

    private function logout($request)
    {
        $request->user()->token()->revoke();
    }
}
