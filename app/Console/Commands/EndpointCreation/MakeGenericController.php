<?php

namespace App\Console\Commands\EndpointCreation;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Pluralizer;
use Illuminate\Support\Str;

class MakeGenericController extends EndpointGeneratorCommand
{
    protected $signature = 'make:genericControllerEndpoint {name} {action} {--r|request}';

    protected function getRequestInput()
    {
        return $this->option('request');
    }

    protected function getStub()
    {
        $this->showMessage();
        return $this->getRequestInput()
            ? "stubs/make-generic-controller-with-request.stub"
            : "stubs/make-generic-controller-without-request.stub";
    }

    function getFolderName(): string
    {
        return "\\Controllers";
    }

    function fileName($name): string
    {
        return ucfirst($this->getActionInput()) . $this->getClassName() . "Controller";
    }

    //

    private function showMessage()
    {
        echo("\n* In " . lcfirst($this->getClassName()). "-routes file, paste the following code:\n\n" .
            "    Route::???('" . lcfirst($this->getActionInput()) . "', '" . $this->getModuleFolderNamespace() . "\Controllers\\" . $this->fileName('') . "@__invoke');\n"
            );
    }
}
