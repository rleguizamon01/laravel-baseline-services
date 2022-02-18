<?php

namespace App\Modules\Auth\AuthModule\Services;

use App\Modules\Auth\AuthModule\Exceptions\WrongCredentialsException;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LoginAuthService extends CommonAuthService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->login($request));
    }

    private function login($request)
    {
        if(!Auth::attempt([$request->email, $request->password]))
            report(new WrongCredentialsException());

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        if($request->has('remember_me') && $request->remember_me)
            $token->expires_at = Carbon::now()->addWeek();

        $token->save();

        return [
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString()
        ];
    }
}
