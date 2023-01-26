<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class BrandFilter{
    public function filter(Builder $builder, $value)
    {
        return $builder->whereHas("brand",function($q) use ($value){
            return $q->whereIn("id",$value);
        });
    }
}
