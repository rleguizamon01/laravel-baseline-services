<?php

namespace App\Console\Commands\ModuleCreation;

use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Pluralizer;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

class MakeRoute extends ModuleGeneratorCommand
{
    protected $signature = 'make:routeModule {name}';

    protected $description = 'Command description';

    protected function getStub()
    {
        $this->showMessage();
        return  "stubs/make-routes.stub";
    }

    function getFolderName(): string
    {
        return "";
    }

    function fileName($name): string
    {
        return strtolower($name) . "-routes";
    }

    private function showMessage()
    {
        echo("\n* In routes file, paste the following code:\n\n" .
        "    Route::prefix('" . lcfirst(Pluralizer::plural($this->getClassName())) . "')->group(function() {\n" .
        "       include('" . $this->getModuleFolderNamespace() . "\\" . $this->fileName($this->getClassName()) . ".php" . "');\n" .
        "    });\n");
    }

}
