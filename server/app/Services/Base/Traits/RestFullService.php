<?php
namespace App\Services\Base\Traits;
use Illuminate\Database\Eloquent\Model;

trait RestFullService{
    public function index()
    {
        return $this->resource::collection($this->model->all());
    }

    public function show(string $slug)
    {
        return new $this->resource($this->model->where("slug",$slug)->first());
    }

    public function save(array $data,int $id = null)
    {
        if($id){
            return $this->model->find($id)->update($data);
        }
        return new $this->resource($this->model->create($data));
    }

    public function destroy(Model $model):bool
    {
        return $model->delete();
    }
}

