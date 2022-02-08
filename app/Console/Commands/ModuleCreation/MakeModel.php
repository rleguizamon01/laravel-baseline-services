<?php

namespace App\Console\Commands\ModuleCreation;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

class MakeModel extends ModuleGeneratorCommand
{
    protected $signature = 'make:modelModule {name}';

    protected function getStub()
    {
        return  "stubs/make-model.stub";
    }

    function getFolderName(): string
    {
        return "";
    }

    function fileName($name): string
    {
        return $this->getClassName();
    }
}
