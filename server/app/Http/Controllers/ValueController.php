<?php

namespace App\Http\Controllers;
use App\Http\Requests\Value\StoreValueRequest;
use App\Http\Requests\Value\UpdateValueRequest;
use App\Services\Value\ValueServiceInterface;
use Illuminate\Support\Facades\App;

class ValueController extends Controller
{
    public ValueServiceInterface $service;
    public StoreValueRequest $storeRequest;
    public UpdateValueRequest $updateRequest;

    public function __construct()
    {
        $this->setService();
    }
    public function setService()
    {
        $this->service = App::make(ValueServiceInterface::class);
    }

    public function setStoreRequest()
    {
        $this->storeRequest = App::make(StoreValueRequest::class);
    }

    public function setUpdateRequest()
    {
        $this->updateRequest = App::make(UpdateValueRequest::class);
    }
}
