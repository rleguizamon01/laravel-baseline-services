<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Pluralizer;
use Illuminate\Support\Str;

class MakeModule extends Command
{
    protected $signature = 'make:module {name}';
    protected $description = 'Creates an entire module which includes controllers, services, requests, factory, seeder, routes and a model.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Artisan::call("make:destroyControllerModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:indexControllerModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:restoreControllerModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:showControllerModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:storeControllerModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:updateControllerModule", ['name' => $this->getNameInput()]);

        Artisan::call("make:factoryModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:seederModule", ['name' => $this->getNameInput()]);

        Artisan::call("make:storeRequestModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:updateRequestModule", ['name' => $this->getNameInput()]);

        Artisan::call("make:commonServiceModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:destroyServiceModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:indexServiceModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:restoreServiceModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:showServiceModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:storeServiceModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:updateServiceModule", ['name' => $this->getNameInput()]);

        Artisan::call("make:modelModule", ['name' => $this->getNameInput()]);
        Artisan::call("make:routeModule", ['name' => $this->getNameInput()]);

        Artisan::call("make:migration create_" . $this->getPluralClassName() . "_table");

        return 0;
    }

    protected function getNameInput()
    {
        return str_replace('/', '\\', $this->argument('name'));
    }

    protected function getPluralClassName()
    {
        return lcfirst(Pluralizer::plural($this->getClassName()));
    }

    protected function getClassName()
    {
        $lastDashPosition = strrpos($this->getNameInput(), '\\');
        if($lastDashPosition)
            return substr($this->getNameInput(), $lastDashPosition + 1);
        else
            return $this->getNameInput();
    }
}
