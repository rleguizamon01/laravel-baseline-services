<?php

namespace App\Console\Commands\ModuleCreation\Controllers;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Pluralizer;
use Illuminate\Support\Str;

class MakeIndexController extends ModuleGeneratorCommand
{
    protected $signature = 'make:indexControllerModule {name}';

    protected function getStub()
    {
        return  "stubs/make-index-controller.stub";
    }

    function getFolderName(): string
    {
        return "\\Controllers";
    }

    function fileName($name): string
    {
        return "Index" . $this->getClassName() . "Controller";
    }
}
