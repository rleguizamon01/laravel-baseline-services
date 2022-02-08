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
        Artisan::call("make:destroyControllerModule", ['name' => $this->argument('name')]);
        Artisan::call("make:indexControllerModule", ['name' => $this->argument('name')]);
        Artisan::call("make:restoreControllerModule", ['name' => $this->argument('name')]);
        Artisan::call("make:showControllerModule", ['name' => $this->argument('name')]);
        Artisan::call("make:storeControllerModule", ['name' => $this->argument('name')]);
        Artisan::call("make:updateControllerModule", ['name' => $this->argument('name')]);

        Artisan::call("make:factoryModule", ['name' => $this->argument('name')]);
        Artisan::call("make:seederModule", ['name' => $this->argument('name')]);

        Artisan::call("make:storeRequestModule", ['name' => $this->argument('name')]);
        Artisan::call("make:updateRequestModule", ['name' => $this->argument('name')]);

        Artisan::call("make:commonServiceModule", ['name' => $this->argument('name')]);
        Artisan::call("make:destroyServiceModule", ['name' => $this->argument('name')]);
        Artisan::call("make:indexServiceModule", ['name' => $this->argument('name')]);
        Artisan::call("make:restoreServiceModule", ['name' => $this->argument('name')]);
        Artisan::call("make:showServiceModule", ['name' => $this->argument('name')]);
        Artisan::call("make:storeServiceModule", ['name' => $this->argument('name')]);
        Artisan::call("make:updateServiceModule", ['name' => $this->argument('name')]);

        Artisan::call("make:modelModule", ['name' => $this->argument('name')]);
        Artisan::call("make:routeModule", ['name' => $this->argument('name')]);

        Artisan::call("make:migration create_" . $this->getPluralClassName() . "_table");

        return 0;
    }

    protected function getPluralClassName()
    {
        return lcfirst(Pluralizer::plural($this->getClassName()));
    }

    protected function getClassName()
    {
        $lastDashPosition = strrpos($this->argument('name'), '\\');
        if($lastDashPosition)
            return substr($this->argument('name'), $lastDashPosition + 1);
        else
            return $this->argument('name');
    }
}
