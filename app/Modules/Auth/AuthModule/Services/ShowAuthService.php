<?php

namespace App\Modules\Auth\AuthModule\Services;

use App\Modules\Auth\AuthModule\Auth;

class ShowAuthService extends CommonAuthService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->show($request, $id));
    }

    private function show($request, $id)
    {
        return Auth::findOrFail($id);
    }
}
