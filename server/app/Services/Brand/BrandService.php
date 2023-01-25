<?php

namespace App\Services\Brand;

use App\Http\Resources\BrandResource;
use App\Models\BrandModel;
use Illuminate\Database\Eloquent\Model;
use App\Services\Base\BaseService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class BrandService extends BaseService implements BrandServiceInterface
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
        $this->model = App::make(BrandModel::class);
    }
    public function setResource():void
    {
        $this->resource = new BrandResource(request());
    }
}
