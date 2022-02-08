<?php

namespace App\Console\Commands\ModuleCreation\Controllers;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeStoreController extends ModuleGeneratorCommand
{
    protected $signature = 'make:storeControllerModule {name}';

    protected function getStub()
    {
        return  "stubs/make-store-controller.stub";
    }

    function getFolderName(): string
    {
        return "\\Controllers";
    }

    function fileName($name): string
    {
        return "Store" . $this->getClassName() . "Controller";
    }
}
