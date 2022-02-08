<?php

namespace App\Console\Commands\ModuleCreation\Services;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeIndexService extends ModuleGeneratorCommand
{
    protected $signature = 'make:indexServiceModule {name}';

    protected function getStub()
    {
        return  "stubs/make-index-service.stub";
    }

    function getFolderName(): string
    {
        return "\\Services";
    }

    function fileName($name): string
    {
        return "Index" . $this->getClassName() . "Service";
    }
}
