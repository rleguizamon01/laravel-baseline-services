<?php

namespace App\Console\Commands\ModuleCreation\Services;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeCommonService extends ModuleGeneratorCommand
{
    protected $signature = 'make:commonServiceModule {name}';

    protected function getStub()
    {
        return  "stubs/make-common-service.stub";
    }

    function getFolderName(): string
    {
        return "\\Services";
    }

    function fileName($name): string
    {
        return "Common" . $this->getClassName() . "Service";
    }
}
