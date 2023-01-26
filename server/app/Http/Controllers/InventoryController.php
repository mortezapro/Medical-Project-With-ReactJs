<?php

namespace App\Http\Controllers;
use App\Http\Requests\Inventory\StoreInventoryRequest;
use App\Http\Requests\Inventory\UpdateInventoryRequest;
use App\Services\Inventory\InventoryServiceInterface;
use Illuminate\Support\Facades\App;

class InventoryController extends Controller
{
    public InventoryServiceInterface $service;
    public StoreInventoryRequest $storeRequest;
    public UpdateInventoryRequest $updateRequest;

    public function __construct()
    {
        $this->setService();
    }
    public function setService()
    {
        $this->service = App::make(InventoryServiceInterface::class);
    }

    public function setStoreRequest()
    {
        $this->storeRequest = App::make(StoreInventoryRequest::class);
    }

    public function setUpdateRequest()
    {
        $this->updateRequest = App::make(UpdateInventoryRequest::class);
    }
}
