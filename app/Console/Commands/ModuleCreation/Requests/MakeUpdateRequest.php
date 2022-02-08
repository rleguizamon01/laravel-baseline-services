<?php

namespace App\Console\Commands\ModuleCreation\Requests;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Console\Command;

class MakeUpdateRequest extends ModuleGeneratorCommand
{
    protected $signature = 'make:updateRequestModule {name}';

    protected function getStub()
    {
        return  "stubs/make-update-request.stub";
    }

    function getFolderName(): string
    {
        return "\\Requests";
    }

    function fileName($name): string
    {
        return "Update" . $this->getClassName() . "Request";
    }
}
