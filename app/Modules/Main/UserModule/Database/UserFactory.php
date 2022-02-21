<?php

namespace App\Modules\Main\UserModule\Database;

use App\Modules\Main\UserModule\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'password' => Hash::make('password')
        ];
    }
}
