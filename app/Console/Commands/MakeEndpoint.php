<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Pluralizer;

class MakeEndpoint extends Command
{
    protected $signature = 'make:endpoint {name} {action} {--r|request}';

    protected $description = 'Creates an endpoint which includes controller, service and, optionally, a request';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Artisan::call("make:genericControllerEndpoint", ['name' => $this->getNameInput(), 'action' => $this->argument('action'), '--request' => $this->option('request')]);
        if($this->option('request'))
            Artisan::call("make:genericRequestEndpoint", ['name' => $this->getNameInput(), 'action' => $this->argument('action')]);
        Artisan::call("make:genericServiceEndpoint", ['name' => $this->getNameInput(), 'action' => $this->argument('action')]);
    }

    protected function getNameInput()
    {
        return str_replace('/', '\\', $this->argument('name'));
    }

}
