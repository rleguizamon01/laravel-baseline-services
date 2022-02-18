<?php

namespace App\Modules\Auth\AuthModule\Services;

use App\Modules\Auth\AuthModule\Auth;

class UpdateAuthService extends CommonAuthService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->update($request, $id), true);
    }

    private function update($request, $id)
    {
        $auth = Auth::findOrFail($id);

        $auth->update([
            //
        ]);

        return $auth;
    }
}
