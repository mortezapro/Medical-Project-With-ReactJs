<?php
namespace App\Services\Product;
use App\Services\Base\ChildInterface;

interface ProductServiceInterface extends ChildInterface{
    public function filter(array $request = null);
}
