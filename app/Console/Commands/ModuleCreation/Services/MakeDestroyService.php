<?php

namespace App\Console\Commands\ModuleCreation\Services;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeDestroyService extends ModuleGeneratorCommand
{
    protected $signature = 'make:destroyServiceModule {name}';

    protected function getStub()
    {
        return  "stubs/make-destroy-service.stub";
    }

    function getFolderName(): string
    {
        return "\\Services";
    }

    function fileName($name): string
    {
        return "Destroy" . $this->getClassName() . "Service";
    }
}
