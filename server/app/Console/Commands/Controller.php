<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Controller extends Command
{
    protected Filesystem $files;
    protected $signature = 'make:controller.service {name}';
    protected $description = 'Generate';

    public function __construct()
    {
        parent::__construct();
        $this->files = App::make(Filesystem::class);
    }

    public function handle()
    {
        $controllerContent = $this->files->get($this->getControllerStubPath());
        $contents = $this->getStubContents($controllerContent,$this->getControllerVariables());
        $path = $this->getSourceFilePath();
        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }
    }

    public function getControllerStubPath()
    {
        return base_path(). '/stubs/controller.service.stub';
    }

    public function getControllerVariables()
    {
        $name = $this->pascalCase(strtolower($this->argument("name")));
        return [
            'namespace' => 'App\\Http\\Controllers',
            'name' => $name,
        ];
    }

    public function getSourceFilePath()
    {
        $name = $this->pascalCase(strtolower($this->argument("name")));
        return base_path('App\\Http\\Controllers') .'\\'. $name."Controller.php";
    }
}
