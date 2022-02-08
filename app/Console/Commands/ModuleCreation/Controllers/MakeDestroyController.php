<?php

namespace App\Console\Commands\ModuleCreation\Controllers;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Pluralizer;
use Illuminate\Support\Str;

class MakeDestroyController extends ModuleGeneratorCommand
{
    protected $signature = 'make:destroyControllerModule {name}';

    protected function getStub()
    {
        return  "stubs/make-destroy-controller.stub";
    }

    function getFolderName(): string
    {
        return "\\Controllers";
    }

    function fileName($name): string
    {
        return "Destroy" . $this->getClassName() . "Controller";
    }
}
