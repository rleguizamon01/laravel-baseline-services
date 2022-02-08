<?php

namespace App\Console\Commands\ModuleCreation\Services;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeStoreService extends ModuleGeneratorCommand
{
    protected $signature = 'make:storeServiceModule {name}';

    protected function getStub()
    {
        return  "stubs/make-store-service.stub";
    }

    function getFolderName(): string
    {
        return "\\Services";
    }

    function fileName($name): string
    {
        return "Store" . $this->getClassName() . "Service";
    }
}
