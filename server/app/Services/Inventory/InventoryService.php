<?php

namespace App\Services\Inventory;

use App\Http\Resources\InventoryResource;
use App\Models\InventoryModel;
use Illuminate\Database\Eloquent\Model;
use App\Services\Base\BaseService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class InventoryService extends BaseService implements InventoryServiceInterface
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
        $this->model = App::make(InventoryModel::class);
    }
    public function setResource():void
    {
        $this->resource = new InventoryResource(request());
    }
}
