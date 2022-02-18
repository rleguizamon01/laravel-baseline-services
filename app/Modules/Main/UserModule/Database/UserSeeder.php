<?php

namespace App\Modules\Main\UserModule\Database;

use App\Modules\Main\UserModule\User;
use Database\Seeders\BaseSeeder;

class UserSeeder extends BaseSeeder
{
    public function run()
    {
        if(!$this->shouldRun()) return;

        User::factory()->count(5)->create();
    }
}
