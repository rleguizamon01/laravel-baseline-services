<?php

namespace App\Console\Commands\ModuleCreation\Services;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeRestoreService extends ModuleGeneratorCommand
{
    protected $signature = 'make:restoreServiceModule {name}';

    protected function getStub()
    {
        return  "stubs/make-restore-service.stub";
    }

    function getFolderName(): string
    {
        return "\\Services";
    }

    function fileName($name): string
    {
        return "Restore" . $this->getClassName() . "Service";
    }
}
