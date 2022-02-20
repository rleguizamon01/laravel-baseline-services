<?php

namespace App\Modules\Auth\AuthModule\Services;

use App\Modules\Auth\AuthModule\Exceptions\WrongCredentialsException;
use App\Modules\Main\UserModule\User;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\UnauthorizedException;

class LoginAuthService extends CommonAuthService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->login($request));
    }

    private function login($request)
    {
        $response = Http::asForm()->post(config('app.url') . '/oauth/token', [
            'grant_type' => 'password',
            'client_id' => config('app.passport_client_id'),
            'client_secret' => config('app.passport_client_secret'),
            'username' => $request->email,
            'password' => $request->password,
            'scope' => '',
        ]);

        $this->catchResponseErrors($response);

        return $response->json();
    }

    private function catchResponseErrors($response)
    {
        switch($response->status()) {
            case '400': case '404':
                throw new WrongCredentialsException();
        }

        if($response->status() != '200') {
            Log::error($response->body());
            throw new UnauthorizedException('Client authentication failed');
        }
    }
}
