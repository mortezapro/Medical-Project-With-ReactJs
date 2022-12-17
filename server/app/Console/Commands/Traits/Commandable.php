<?php

namespace App\Console\Commands\Traits;

use Illuminate\Support\Pluralizer;

trait Commandable{

    public function getSingularClassName(string $name):string
    {
        return ucwords(Pluralizer::singular($name));
    }

    public function pascalCase(string $name):string
    {
        return ucwords(strtolower($name));
    }

    protected function replaceType($stub,$type, $name): string
    {
        return str_replace($type,$name,$stub);
    }

    public function getStubContents($stub , $stubVariables = [])
    {
        foreach ($stubVariables as $search => $replace)
        {
            $stub = str_replace('{{'.$search.'}}' , $replace, $stub);
            $stub = str_replace('{{ '.$search.' }}' , $replace, $stub);
        }

        return $stub;
    }

    protected function makeDirectory($path)
    {
        if (! $this->files->isDirectory($path)) {
            $this->files->makeDirectory($path, 0777, true, true);
        }
        return $path;
    }

    public function checkFileExist($path):bool
    {
        if ($this->files->exists($path)) {
            return true;
        }
        return false;
    }
}
