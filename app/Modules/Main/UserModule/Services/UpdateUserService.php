<?php

namespace App\Modules\Main\UserModule\Services;

use App\Modules\Main\UserModule\User;

class UpdateUserService extends CommonUserService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->update($request, $id), true);
    }

    private function update($request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            //
        ]);

        return $user;
    }
}
