<?php

namespace App\Services\Value;

use App\Http\Resources\ValueResource;
use App\Models\ValueModel;
use Illuminate\Database\Eloquent\Model;
use App\Services\Base\BaseService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class ValueService extends BaseService implements ValueServiceInterface
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
        $this->model = App::make(ValueModel::class);
    }
    public function setResource():void
    {
        $this->resource = new ValueResource(request());
    }
}
