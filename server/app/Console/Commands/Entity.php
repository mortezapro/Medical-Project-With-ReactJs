<?php

namespace App\Console\Commands;

use App\Helpers\Code;
use App\Helpers\UpdateServiceProvider;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class Entity extends Command
{
    protected Filesystem $files;
    protected $signature = 'make:entity {name}';
    protected $description = 'generate Controller,Service,Model,Resource,Request,Api Resource Route';

    public function __construct()
    {
        parent::__construct();
        $this->files = App::make(Filesystem::class);
    }

    public function handle()
    {
        $name            = strtolower($this->argument("name"));
        $pluralName      = Str::plural($name);
        $pascalName      = $this->pascalCase($name);
        $modelPath       = base_path("App".DIRECTORY_SEPARATOR."Models".DIRECTORY_SEPARATOR.$pascalName."Model.php");
        $resourcePath    = base_path("App".DIRECTORY_SEPARATOR."Http".DIRECTORY_SEPARATOR."Resources".DIRECTORY_SEPARATOR.$pascalName."Resource.php");
        $servicePath     = base_path("App".DIRECTORY_SEPARATOR."Services".DIRECTORY_SEPARATOR.$pascalName.DIRECTORY_SEPARATOR.$pascalName."Service.php");
        $controllerPath  = base_path("App".DIRECTORY_SEPARATOR."Http".DIRECTORY_SEPARATOR."Controllers".DIRECTORY_SEPARATOR.$pascalName."Controller.php");

        $migrationName = "create_".$pluralName."_table.php";
        if(!$this->migrationExists($migrationName)){
            Artisan::call("make:migration create_".$pluralName."Table");
        }
        if(!$this->checkFileExist($modelPath)){
            Artisan::call("make:model.service ".$pascalName);
        }
        if(!$this->checkFileExist($resourcePath)){
            Artisan::call("make:resource ".$pascalName."Resource");
        }
        if(!$this->checkFileExist($servicePath)){
            Artisan::call("make:service ".$pascalName);
        }
        if(!$this->checkRequestExist($pascalName)){
            Artisan::call("make:request.service ".$pascalName);
        }
        if(!$this->checkFileExist($controllerPath)){
            Artisan::call("make:controller.service ".$pascalName);
        }
        $name = $this->pascalCase($this->argument("name"));
        $this->handleApiResourceRoute($name);
        new UpdateServiceProvider($name);
        $this->info('Entity "'.$name.'" Created successfully.');
    }

    public function handleApiResourceRoute(string $name)
    {
        $path = "routes".DIRECTORY_SEPARATOR."api.php";
        $startingCondition = '"prefix"=>"v1"';
        $terminationCondition = "});";

        $routeContent = $this->files->get($this->getRouteStubPath());
        $routeContent = $this->getStubContents($routeContent,$this->getRouteVariables());
        $code = new Code();

        // generate crud routes
        $code->putToFile($path,$startingCondition,$terminationCondition,$routeContent);

        // import Controller file in route
        $this->importControllerInRoute($name);
    }

    public function getRouteStubPath(): string
    {
        return base_path(). '/stubs/api.stub';
    }
    public function getRouteVariables():array
    {
        return [
            'lower_name'  => strtolower($this->argument('name')),
            'pascal_name' => $this->pascalCase($this->argument('name')),
        ];
    }
    public function importControllerInRoute(string $name)
    {
        $path = "routes".DIRECTORY_SEPARATOR."api.php";
        $content = "use App\Http\Controllers".DIRECTORY_SEPARATOR.$name."Controller;";
        $startingCondition = "use ";
        $terminationCondition = ";";
        $code = new Code();
        $code->putToFile($path,$startingCondition,$terminationCondition,$content);
    }

    public function checkRequestExist($pascalName):bool
    {
        $directory = base_path("App".DIRECTORY_SEPARATOR."Http".DIRECTORY_SEPARATOR."Requests".DIRECTORY_SEPARATOR.$pascalName);
        $StorePath = $directory.DIRECTORY_SEPARATOR."Store".$pascalName."Request.php";
        $updatePath = $directory.DIRECTORY_SEPARATOR."Update".$pascalName."Request.php";
        if($this->files->exists($directory)){
            return false;
        }
        if ($this->files->exists($StorePath) && $this->files->exists($updatePath)) {
            return true;
        }
        return false;
    }
    protected function migrationExists($mgr)
    {
        $path = base_path("database\\migrations\\");
        $files = scandir($path);
        $pos = false;
        foreach ($files as $key => &$value) {
            $pos = strpos($value, $mgr);
            if($pos !== false) return true;
        }
        return false;
    }
}
