<?php

namespace App\Http\Controllers;
use App\Http\Requests\InventoryItems\StoreInventoryItemsRequest;
use App\Http\Requests\InventoryItems\UpdateInventoryItemsRequest;
use App\Services\InventoryItems\InventoryItemsServiceInterface;
use Illuminate\Support\Facades\App;

class InventoryItemsController extends Controller
{
    public InventoryItemsServiceInterface $service;
    public StoreInventoryItemsRequest $storeRequest;
    public UpdateInventoryItemsRequest $updateRequest;

    public function __construct()
    {
        $this->setService();
    }
    public function setService()
    {
        $this->service = App::make(InventoryItemsServiceInterface::class);
    }

    public function setStoreRequest()
    {
        $this->storeRequest = App::make(StoreInventoryItemsRequest::class);
    }

    public function setUpdateRequest()
    {
        $this->updateRequest = App::make(UpdateInventoryItemsRequest::class);
    }
}
