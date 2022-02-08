<?php

namespace App\Console\Commands\ModuleCreation\Controllers;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeShowController extends ModuleGeneratorCommand
{
    protected $signature = 'make:showControllerModule {name}';

    protected function getStub()
    {
        return  "stubs/make-show-controller.stub";
    }

    function getFolderName(): string
    {
        return "\\Controllers";
    }

    function fileName($name): string
    {
        return "Show" . $this->getClassName() . "Controller";
    }
}
