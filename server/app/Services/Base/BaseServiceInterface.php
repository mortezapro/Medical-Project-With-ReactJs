<?php

namespace App\Services\Base;

use Illuminate\Database\Eloquent\Model;

interface BaseServiceInterface{
    public function index();
    public function show(int $id);
    public function save(array $data,int $id = null);
    public function delete(Model $model);
}
