<?php

namespace App\Traits;

use App\Models\CategoryModel;

trait Categorizable
{
    public function categories()
    {
        return $this->morphToMany(CategoryModel::class,'categorizable');
    }
    public function categoriesReverse()
    {
        return $this->morphedByMany(CategoryModel::class,'categorizable');
    }
}
