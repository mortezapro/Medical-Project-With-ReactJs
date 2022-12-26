<?php
namespace App\Services\Base\Traits;
use Illuminate\Database\Eloquent\Model;

trait RestFullService{
    public function index()
    {
//        return $this->model->paginate(10);
        return $this->resource::collection($this->model->all());
    }

    public function show(string $param)
    {
        if(is_numeric($param)){
            return new $this->resource($this->model->findOrFail($param));
        }
        return new $this->resource($this->where(["slug"=>$param])->firstOrFail());
    }

    public function save(array $data,int $id = null)
    {
        if(!$id){
            //create
            return new $this->resource($this->model->create($data)->refresh());
        }
        //update
        $model = $this->model->findOrFail($id);

        if(!$model->update($data)){
            return false;
        }
        return true;
    }

    public function destroy(Model $model):bool
    {
        return $model->delete();
    }
}

