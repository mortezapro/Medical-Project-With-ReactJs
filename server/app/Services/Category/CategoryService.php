<?php

namespace App\Services\Category;

use App\Http\Resources\CategoryResource;
use App\Models\CategoryModel;
use Illuminate\Database\Eloquent\Model;
use App\Services\Base\BaseService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class CategoryService extends BaseService implements CategoryServiceInterface
{
    public JsonResource $resource;
    protected Model $model;

    public function __construct()
    {
        $this->setModel();
        $this->setResource();
    }
    public function setModel():void
    {
        $this->model = App::make(CategoryModel::class);
    }
    public function setResource():void
    {
        $this->resource = new CategoryResource(request());
    }

    public function getTopProductCategory(int $count)
    {
        return $this->model->withCount("products")->orderBy("products_count","desc")->take($count)->get();
    }
}
