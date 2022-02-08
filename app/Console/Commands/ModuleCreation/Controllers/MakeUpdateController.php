<?php

namespace App\Console\Commands\ModuleCreation\Controllers;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeUpdateController extends ModuleGeneratorCommand
{
    protected $signature = 'make:updateControllerModule {name}';

    protected function getStub()
    {
        return  "stubs/make-update-controller.stub";
    }

    function getFolderName(): string
    {
        return "\\Controllers";
    }

    function fileName($name): string
    {
        return "Update" . $this->getClassName() . "Controller";
    }
}
