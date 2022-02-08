<?php

namespace App\Console\Commands\ModuleCreation\Services;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeShowService extends ModuleGeneratorCommand
{
    protected $signature = 'make:showServiceModule {name}';

    protected function getStub()
    {
        return  "stubs/make-show-service.stub";
    }

    function getFolderName(): string
    {
        return "\\Services";
    }

    function fileName($name): string
    {
        return "Show" . $this->getClassName() . "Service";
    }
}
