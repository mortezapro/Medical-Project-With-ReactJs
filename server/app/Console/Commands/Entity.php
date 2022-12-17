<?php

namespace App\Console\Commands;

use App\Services\Code\Code;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;

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
        $name = $this->pascalCase($this->argument("name"));
//        $migrationPath   = base_path("database".DIRECTORY_SEPARATOR."migrations".DIRECTORY_SEPARATOR."Create".$name."Table");
//        $modelPath       = base_path("App".DIRECTORY_SEPARATOR."Models".DIRECTORY_SEPARATOR.$name."Model");
//        $servicePath     = base_path("App".DIRECTORY_SEPARATOR."Services".DIRECTORY_SEPARATOR.$name."Service");
//        $resourcePath    = base_path("App".DIRECTORY_SEPARATOR."Http".DIRECTORY_SEPARATOR."Resources".DIRECTORY_SEPARATOR.$name."Resource");
//        $requestPath     = base_path("App".DIRECTORY_SEPARATOR."Http".DIRECTORY_SEPARATOR."Requests".DIRECTORY_SEPARATOR.$name."Request");
//        $controllerPath  = base_path("App".DIRECTORY_SEPARATOR."Http".DIRECTORY_SEPARATOR."Controllers".DIRECTORY_SEPARATOR.$name."Controller");
//
//        if(!$this->checkFileExist($migrationPath)){
//            Artisan::call("make:migration.service ".$name);
//        }
//        if(!$this->checkFileExist($modelPath)){
//            Artisan::call("make:model.service ".$name);
//        }
//        if(!$this->checkFileExist($servicePath)){
//            Artisan::call("make:service ".$name);
//        }
//        if(!$this->checkFileExist($resourcePath)){
//            Artisan::call("make:resource.service ".$name);
//        }
//        if(!$this->checkFileExist($requestPath)){
//            Artisan::call("make:request.service ".$name);
//        }
//        if(!$this->checkFileExist($controllerPath)){
//            Artisan::call("make:controller.service ".$name);
//        }

        $this->handleApiResourceRoute($name);
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
}
