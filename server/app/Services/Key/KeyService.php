<?php

namespace App\Services\Key;

use App\Http\Resources\KeyResource;
use App\Models\KeyModel;
use Illuminate\Database\Eloquent\Model;
use App\Services\Base\BaseService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class KeyService extends BaseService implements KeyServiceInterface
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
        $this->model = App::make(KeyModel::class);
    }
    public function setResource():void
    {
        $this->resource = new KeyResource(request());
    }
}
