<?php

namespace App\Services\ProductDetail;

use App\Http\Resources\ProductDetailResource;
use App\Models\ProductDetailModel;
use Illuminate\Database\Eloquent\Model;
use App\Services\Base\BaseService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class ProductDetailService extends BaseService implements ProductDetailServiceInterface
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
        $this->model = App::make(ProductDetailModel::class);
    }
    public function setResource():void
    {
        $this->resource = new ProductDetailResource(request());
    }
}
