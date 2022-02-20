<?php

namespace App\Console\Commands\EndpointCreation;

class MakeGenericService extends EndpointGeneratorCommand
{
    protected $signature = 'make:genericServiceEndpoint {name} {action}';

    protected function getStub()
    {
        return  "stubs/make-generic-service.stub";
    }

    function getFolderName(): string
    {
        return "\\Services";
    }

    function fileName($name): string
    {
        return ucfirst($this->getActionInput()) . $this->getClassName() . "Service";
    }
}
