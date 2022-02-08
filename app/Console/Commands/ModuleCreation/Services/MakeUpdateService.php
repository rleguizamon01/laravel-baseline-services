<?php

namespace App\Console\Commands\ModuleCreation\Services;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeUpdateService extends ModuleGeneratorCommand
{
    protected $signature = 'make:updateServiceModule {name}';

    protected function getStub()
    {
        return  "stubs/make-update-service.stub";
    }

    function getFolderName(): string
    {
        return "\\Services";
    }

    function fileName($name): string
    {
        return "Update" . $this->getClassName() . "Service";
    }
}
