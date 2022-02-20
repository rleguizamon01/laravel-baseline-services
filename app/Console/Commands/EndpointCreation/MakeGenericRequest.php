<?php

namespace App\Console\Commands\EndpointCreation;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeGenericRequest extends EndpointGeneratorCommand
{
    protected $signature = 'make:genericRequestEndpoint {name} {action}';

    protected function getStub()
    {
        return "stubs/make-generic-request.stub";
    }

    function getFolderName(): string
    {
        return "\\Requests";
    }

    function fileName($name): string
    {
        return ucfirst($this->getActionInput()) . $this->getClassName() . "Request";
    }
}
