<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\App;

class Service extends Command
{
    protected Filesystem $files;
    protected $signature = 'make:service {name}';
    protected $description = 'generate service';

    public function __construct()
    {
        parent::__construct();
        $this->files = App::make(Filesystem::class);
    }

    public function handle()
    {
        $pascalName = $this->pascalCase(strtolower($this->argument("name")));
        // Make Service Directory
        $directoryPath = base_path('App\\Services') .'\\' .$pascalName;
        $this->makeDirectory($directoryPath);
        $this->handleInterfaceService($pascalName);
        $this->handleService($pascalName);
    }

    public function handleInterfaceService(string $name)
    {
        $serviceInterfaceContent = $this->files->get($this->getServiceInterfaceStubPath());
        $contents = $this->getStubContents($serviceInterfaceContent,$this->getServiceVariables());
        $path = $this->getInterfaceSourceFilePath();
        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }
    }

    public function handleService(string $name)
    {
        $serviceContent = $this->files->get($this->getServiceStubPath());
        $contents = $this->getStubContents($serviceContent,$this->getServiceVariables());
        $path = $this->getSourceFilePath();
        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }
    }

    public function getServiceInterfaceStubPath()
    {
        return base_path(). '/stubs/service.interface.stub';
    }

    public function getServiceStubPath()
    {
        return base_path(). '/stubs/service.stub';
    }
    public function getServiceVariables()
    {
        $name = $this->pascalCase(strtolower($this->argument("name")));
        return [
            'namespace' => 'App\\Services\\'.$name,
            'name' => $name,
        ];
    }
    public function getSourceFilePath()
    {
        $name = $this->pascalCase(strtolower($this->argument("name")));
        return base_path('App\\Services') .'\\'.$name.'\\'. $name."Service.php";
    }
    public function getInterfaceSourceFilePath()
    {
        $name = $this->pascalCase(strtolower($this->argument("name")));
        return base_path('App\\Services') .'\\'.$name.'\\'. $name."ServiceInterface.php";
    }
}
