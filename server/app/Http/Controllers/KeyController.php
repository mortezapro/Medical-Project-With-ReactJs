<?php

namespace App\Http\Controllers;
use App\Http\Requests\Key\StoreKeyRequest;
use App\Http\Requests\Key\UpdateKeyRequest;
use App\Services\Key\KeyServiceInterface;
use Illuminate\Support\Facades\App;

class KeyController extends Controller
{
    public KeyServiceInterface $service;
    public StoreKeyRequest $storeRequest;
    public UpdateKeyRequest $updateRequest;

    public function __construct()
    {
        $this->setService();
    }
    public function setService()
    {
        $this->service = App::make(KeyServiceInterface::class);
    }

    public function setStoreRequest()
    {
        $this->storeRequest = App::make(StoreKeyRequest::class);
    }

    public function setUpdateRequest()
    {
        $this->updateRequest = App::make(UpdateKeyRequest::class);
    }
}
