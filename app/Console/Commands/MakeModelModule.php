<?php

namespace App\Console\Commands;

use Illuminate\Console\Concerns\CreatesMatchingTest;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

class MakeModelModule extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:modelModule {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    protected function getStub()
    {
        return  "stubs/make-model.stub";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . "\\Modules\\" . $this->getNameInput() . "Module";
    }

    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the model.'],
        ];
    }

    protected function qualifyClass($name)
    {

        $name = ltrim($name, '\\/');

        $name = str_replace('/', '\\', $name);


        $rootNamespace = $this->rootNamespace();

        if (Str::startsWith($name, $rootNamespace)) {
            return $name;
        }

        if(str_contains($name, '\\'))
            return $this->qualifyClass(
                $this->getDefaultNamespace(trim($rootNamespace, '\\')).strrchr($name, "\\")
            );
        else
            return $this->qualifyClass(
                $this->getDefaultNamespace(trim($rootNamespace, '\\')).'\\'.$name
            );
    }

}
