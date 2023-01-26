<?php

namespace App\Http\Controllers;
use App\Http\Requests\Currency\StoreCurrencyRequest;
use App\Http\Requests\Currency\UpdateCurrencyRequest;
use App\Services\Currency\CurrencyServiceInterface;
use Illuminate\Support\Facades\App;

class CurrencyController extends Controller
{
    public CurrencyServiceInterface $service;
    public StoreCurrencyRequest $storeRequest;
    public UpdateCurrencyRequest $updateRequest;

    public function __construct()
    {
        $this->setService();
    }
    public function setService()
    {
        $this->service = App::make(CurrencyServiceInterface::class);
    }

    public function setStoreRequest()
    {
        $this->storeRequest = App::make(StoreCurrencyRequest::class);
    }

    public function setUpdateRequest()
    {
        $this->updateRequest = App::make(UpdateCurrencyRequest::class);
    }
}
