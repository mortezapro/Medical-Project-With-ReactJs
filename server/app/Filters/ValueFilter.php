<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class ValueFilter{
    public function filter(Builder $builder, $value)
    {
        return $builder->whereHas("details",function($q) use ($value){
            return $q->whereIn("value_id",$value);
        });
    }
}
