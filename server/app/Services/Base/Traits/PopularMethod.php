<?php
namespace App\Services\Base\Traits;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

trait PopularMethod{

    public function paginate(int $count): AnonymousResourceCollection
    {
        return $this->resource::collection($this->model->paginate($count));
    }

    public function count($condition)
    {
        return $this->model->where($condition)->count();
    }
    public function where($condition)
    {
        return $this->model->where($condition);
    }

}
