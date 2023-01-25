<?php

namespace App\Services\Product;

use App\Http\Resources\ProductResource;
use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Model;
use App\Services\Base\BaseService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ProductService extends BaseService implements ProductServiceInterface
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
        $this->model = App::make(ProductModel::class);
    }
    public function setResource():void
    {
        $this->resource = new ProductResource(request());
    }

    public function filter(array $request = null)
    {
        $filters = ["price","category","brand","value"];
        return ProductResource::collection($this->model->canFilter($filters)->select("products.*")->orderBy("price","desc")->paginate(12));
    }
}
