<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Request extends Command
{
    protected Filesystem $files;
    protected $signature = 'make:request.service {name}';
    protected $description = 'Generate Form Request';

    public function __construct()
    {
        parent::__construct();
        $this->files = App::make(Filesystem::class);
    }

    public function handle()
    {
        $pascalName = $this->pascalCase(strtolower($this->argument("name")));
        // Make Service Directory
        $directoryPath = base_path('App\\Http\\Requests') .'\\' .$pascalName;
        $this->makeDirectory($directoryPath);
        $this->handleStoreRequest();
        $this->handleUpdateRequest();
    }

    public function handleStoreRequest()
    {
        $requestContent = $this->files->get($this->getRequestStoreStubPath());
        $contents = $this->getStubContents($requestContent,$this->getRequestVariables());
        $path = $this->getSourceStoreFilePath();
        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }
    }

    public function handleUpdateRequest()
    {
        $requestContent = $this->files->get($this->getRequestUpdateStubPath());
        $contents = $this->getStubContents($requestContent,$this->getRequestVariables());
        $path = $this->getSourceUpdateFilePath();
        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }
    }

    public function getRequestVariables()
    {
        $name = $this->pascalCase(strtolower($this->argument("name")));
        $pluralName = Str::plural($name);
        return [
            'namespace' => 'App\\Http\\Requests\\'.$name,
            'name' => $name,
            'table' => strtolower($pluralName),
        ];
    }

    public function getRequestStoreStubPath()
    {
        return base_path(). '/stubs/request.store.service.stub';
    }
    public function getRequestUpdateStubPath()
    {
        return base_path(). '/stubs/request.update.service.stub';
    }
    public function getSourceStoreFilePath()
    {
        $name = $this->pascalCase(strtolower($this->argument("name")));
        return base_path('App\\Http\\Requests\\') .$name.'\\Store'. $name."Request.php";
    }
    public function getSourceUpdateFilePath()
    {
        $name = $this->pascalCase(strtolower($this->argument("name")));
        return base_path('App\\Http\\Requests\\') .$name.'\\Update'. $name."Request.php";
    }
}
