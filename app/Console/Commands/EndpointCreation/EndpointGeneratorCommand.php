<?php

namespace App\Console\Commands\EndpointCreation;

use App\Console\Commands\ModuleCreation\ModuleGeneratorCommand;
use Illuminate\Support\Pluralizer;

abstract class EndpointGeneratorCommand extends ModuleGeneratorCommand
{
    protected function getActionInput()
    {
        return trim($this->argument('action'));
    }

    protected function replaceClass($stub, $name)
    {
        $stubReplaced = str_replace(['DummyClass', '{{ class }}', '{{class}}'], $this->getClassName(), $stub);
        $stubReplaced = str_replace(['{{ pluralCamelCaseClass }}', '{{pluralCamelCaseClass}}'], lcfirst(Pluralizer::plural($this->getClassName())), $stubReplaced);
        $stubReplaced = str_replace(['{{ singularCamelCaseClass }}', '{{singularCamelCaseClass}}'], lcfirst(Pluralizer::singular($this->getClassName())), $stubReplaced);
        $stubReplaced = str_replace(['{{ serviceNamespace }}', '{{serviceNamespace}}'], $this->getServiceNamespace(), $stubReplaced);
        $stubReplaced = str_replace(['{{ requestNamespace }}', '{{requestNamespace}}'], $this->getRequestNamespace(), $stubReplaced);
        $stubReplaced = str_replace(['{{ databaseNamespace }}', '{{databaseNamespace}}'], $this->getDatabaseNamespace(), $stubReplaced);
        $stubReplaced = str_replace(['{{ moduleNamespace }}', '{{moduleNamespace}}'], $this->getModuleFolderNamespace(), $stubReplaced);
        $stubReplaced = str_replace(['{{ action }}', '{{action}}'], lcfirst($this->getActionInput()), $stubReplaced);
        $stubReplaced = str_replace(['{{ Action }}', '{{Action}}'], ucfirst($this->getActionInput()), $stubReplaced);

        return $stubReplaced;
    }
}
