<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class CategoryFilter{
    public function filter(Builder $builder, $value)
    {
        return $builder->whereHas("categories",function($q) use ($value){
            return $q->whereIn("id",$value);
        });
    }
}
