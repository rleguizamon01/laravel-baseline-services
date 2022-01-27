<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class BaseSeeder extends Seeder
{
    protected array $acceptedEnvironments = ['local', 'production'];

    protected function shouldRun(): bool
    {
        return in_array(App::environment(), $this->acceptedEnvironments);
    }
}
