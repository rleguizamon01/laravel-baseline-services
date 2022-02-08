<?php

namespace App\Console\Commands\ModuleCreation;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Pluralizer;
use Illuminate\Support\Str;

abstract class ModuleGeneratorCommand extends GeneratorCommand
{
    abstract function getFolderName(): string;

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . "\\Modules\\" . $this->getNameInput() . "Module" . $this->getFolderName();
    }

    protected function getModuleFolderNamespace()
    {
        return $this->rootNamespace() . "Modules\\" . $this->getNameInput() . "Module";
    }

    protected function getServiceNamespace()
    {
        return $this->rootNamespace() . "Modules\\" . $this->getNameInput() . "Module\\Services";
    }

    protected function getRequestNamespace()
    {
        return $this->rootNamespace() . "Modules\\" . $this->getNameInput() . "Module\\Requests";
    }

    protected function getDatabaseNamespace()
    {
        return $this->rootNamespace() . "Modules\\" . $this->getNameInput() . "Module\\Database";
    }

    protected function getNameInput()
    {
        return ucfirst(trim($this->argument('name')));
    }

    protected function getClassName()
    {
        $lastDashPosition = strrpos($this->getNameInput(), '\\');
        if($lastDashPosition)
            return substr($this->getNameInput(), $lastDashPosition + 1);
        else
            return $this->getNameInput();
    }

    protected function qualifyClass($name)
    {
        $name = ltrim($name, '\\/');

        $name = str_replace('/', '\\', $name);

        $rootNamespace = $this->rootNamespace();

        if (Str::startsWith($name, $rootNamespace)) {
            return $name;
        }

        if(str_contains($name, '\\')) {
            echo($this->getDefaultNamespace(trim($rootNamespace, '\\')) . $this->fileName(strrchr($name, "\\")) . "\n\n");
            return $this->qualifyClass(
                $this->getDefaultNamespace(trim($rootNamespace, '\\')) . '\\' . $this->fileName(strrchr($name, "\\"))
            );
        } else
            return $this->qualifyClass(
                $this->getDefaultNamespace(trim($rootNamespace, '\\')).'\\'. $this->fileName($name)
            );
    }

    abstract function fileName($name): string;

    protected function replaceClass($stub, $name)
    {
        $stubReplaced = str_replace(['DummyClass', '{{ class }}', '{{class}}'], $this->getClassName(), $stub);
        $stubReplaced = str_replace(['{{ pluralCamelCaseClass }}', '{{pluralCamelCaseClass}}'], lcfirst(Pluralizer::plural($this->getClassName())), $stubReplaced);
        $stubReplaced = str_replace(['{{ singularCamelCaseClass }}', '{{singularCamelCaseClass}}'], lcfirst(Pluralizer::singular($this->getClassName())), $stubReplaced);
        $stubReplaced = str_replace(['{{ serviceNamespace }}', '{{serviceNamespace}}'], $this->getServiceNamespace(), $stubReplaced);
        $stubReplaced = str_replace(['{{ requestNamespace }}', '{{requestNamespace}}'], $this->getRequestNamespace(), $stubReplaced);
        $stubReplaced = str_replace(['{{ databaseNamespace }}', '{{databaseNamespace}}'], $this->getDatabaseNamespace(), $stubReplaced);
        $stubReplaced = str_replace(['{{ moduleNamespace }}', '{{moduleNamespace}}'], $this->getModuleFolderNamespace(), $stubReplaced);

        return $stubReplaced;
    }
}
