<?php

namespace App\Console\Commands\ModuleCreation\Requests;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeStoreRequest extends ModuleGeneratorCommand
{
    protected $signature = 'make:storeRequestModule {name}';

    protected function getStub()
    {
        return  "stubs/make-store-request.stub";
    }

    function getFolderName(): string
    {
        return "\\Requests";
    }

    function fileName($name): string
    {
        return "Store" . $this->getClassName() . "Request";
    }
}
