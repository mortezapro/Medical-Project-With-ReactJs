<?php

namespace App\Services\Base;
use Illuminate\Database\Eloquent\Model;

class BaseService implements BaseServiceInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->all();
    }

    public function show($id)
    {
        return $this->model::find($id);
    }

    public function save(array $data,int $id = null)
    {
        if($id){
            return $this->model->find($id)->update($data);
        }
        return $this->model->create($data);
    }

    public function delete(Model $model)
    {
        return $model->delete();
    }
}
