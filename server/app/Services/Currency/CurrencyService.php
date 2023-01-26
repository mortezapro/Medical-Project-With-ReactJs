<?php

namespace App\Services\Currency;

use App\Http\Resources\CurrencyResource;
use App\Models\CurrencyModel;
use Illuminate\Database\Eloquent\Model;
use App\Services\Base\BaseService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class CurrencyService extends BaseService implements CurrencyServiceInterface
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
        $this->model = App::make(CurrencyModel::class);
    }
    public function setResource():void
    {
        $this->resource = new CurrencyResource(request());
    }
}
