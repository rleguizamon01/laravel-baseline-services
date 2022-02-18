<?php

namespace App\Modules\Auth\AuthModule\Services;

use App\Modules\Auth\AuthModule\Auth;
use App\Modules\Main\UserModule\User;
use Illuminate\Support\Facades\Hash;

class RegisterAuthService extends CommonAuthService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->register($request), true);
    }

    private function register($request)
    {
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password)
        ]);

        return $user;
    }
}
