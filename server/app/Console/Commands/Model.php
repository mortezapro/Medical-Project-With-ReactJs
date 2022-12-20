<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Model extends Command
{
    protected Filesystem $files;
    protected $signature = 'make:model.service {name}';
    protected $description = 'Generate Custom Model';

    public function __construct()
    {
        parent::__construct();
        $this->files = App::make(Filesystem::class);
    }

    public function handle()
    {
        $modelContent = $this->files->get($this->getModelStubPath());
        $contents = $this->getStubContents($modelContent,$this->getModelVariables());
        $path = $this->getSourceFilePath();
        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }
    }

    public function getModelStubPath()
    {
        return base_path(). '/stubs/model.service.stub';
    }
    public function getModelVariables()
    {
        $name = $this->pascalCase(strtolower($this->argument("name")));
        $pluralName = Str::plural($name);
        return [
            'namespace' => 'App\\Models',
            'name' => $name,
            'table' => strtolower($pluralName),
        ];
    }
    public function getSourceFilePath()
    {
        $name = $this->pascalCase(strtolower($this->argument("name")));
        return base_path('App\\Models') .'\\'. $name."Model.php";
    }
}
