<?php
namespace App\Filters\Base;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class BaseFilter{
    protected array $declared_filters;

    public function __construct($filters){
        $this->request = request();
        $this->declared_filters = $filters;
    }

    public function filter(Builder $builder){
        foreach ($this->getRequestedFilters() as $filter => $value){
            $this->resolveFilterClass($filter)->filter( $builder, $value);
        }
        return $builder;
    }

    public function getRequestedFilters(){
        return array_filter($this->request->only($this->declared_filters));
  }

    public function resolveFilterClass($declared_filter_key){
        $filter_name = Str::studly($declared_filter_key);
        $class_name = "App".DIRECTORY_SEPARATOR."Filters".DIRECTORY_SEPARATOR.$filter_name."Filter";
        return App::make($class_name);
    }
}
