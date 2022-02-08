<?php

namespace App\Console\Commands\ModuleCreation\Database;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeModelFactory extends ModuleGeneratorCommand
{
    protected $signature = 'make:factoryModule {name}';

    protected function getStub()
    {
        return  "stubs/make-factory.stub";
    }

    function getFolderName(): string
    {
        return "\\Database";
    }

    function fileName($name): string
    {
        return $this->getClassName() . "Factory";
    }
}
