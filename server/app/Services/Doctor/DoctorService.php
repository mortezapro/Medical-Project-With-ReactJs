<?php

namespace App\Services\Doctor;

use App\Http\Resources\DoctorResource;
use App\Models\DoctorModel;
use Illuminate\Database\Eloquent\Model;
use App\Services\Base\BaseService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class DoctorService extends BaseService implements DoctorServiceInterface
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
        $this->model = App::make(DoctorModel::class);
    }
    public function setResource():void
    {
        $this->resource = new DoctorResource(request());
    }
}
