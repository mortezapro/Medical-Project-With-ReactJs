<?php

namespace App\Services\InventoryItems;

use App\Http\Resources\InventoryItemsResource;
use App\Models\InventoryItemsModel;
use Illuminate\Database\Eloquent\Model;
use App\Services\Base\BaseService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class InventoryItemsService extends BaseService implements InventoryItemsServiceInterface
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
        $this->model = App::make(InventoryItemsModel::class);
    }
    public function setResource():void
    {
        $this->resource = new InventoryItemsResource(request());
    }
}
