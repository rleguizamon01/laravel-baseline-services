<?php

namespace App\Modules\Main\UserModule\Services;

use App\Modules\Main\UserModule\User;

class DestroyUserService extends CommonUserService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->destroy($id));
    }

    private function destroy($id)
    {
        return User::findOrFail($id)->delete();
    }
}
