<?php

namespace App\Console\Commands\ModuleCreation\Database;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeModelSeeder extends ModuleGeneratorCommand
{
    protected $signature = 'make:seederModule {name}';

    protected function getStub()
    {
        $this->showMessage();
        return  "stubs/make-seeder.stub";
    }

    function getFolderName(): string
    {
        return "\\Database";
    }

    function fileName($name): string
    {
        return $this->getClassName() . "Seeder";
    }

    private function showMessage()
    {
        echo("\n* Remember to add " . $this->getClassName() . "Seeder::class to database/seeders/DatabaseSeeder!\n");
    }
}
