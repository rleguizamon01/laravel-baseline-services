<?php

namespace App\Console\Commands\ModuleCreation\Controllers;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeRestoreController extends ModuleGeneratorCommand
{
    protected $signature = 'make:restoreControllerModule {name}';

    protected function getStub()
    {
        return  "stubs/make-restore-controller.stub";
    }

    function getFolderName(): string
    {
        return "\\Controllers";
    }

    function fileName($name): string
    {
        return "Restore" . $this->getClassName() . "Controller";
    }
}
