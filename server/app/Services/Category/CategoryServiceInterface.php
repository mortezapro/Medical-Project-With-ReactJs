<?php
namespace App\Services\Category;
use App\Services\Base\ChildInterface;

interface CategoryServiceInterface extends ChildInterface{
    public function getTopProductCategory(int $count);
}
