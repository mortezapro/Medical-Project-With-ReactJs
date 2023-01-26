<?php

namespace App\Services\Base;
use App\Services\Base\Traits\PopularMethod;
use App\Services\Base\Traits\RestFullService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;

class BaseService implements BaseServiceInterface
{
    use RestFullService,PopularMethod;
    protected Model $model;
    protected JsonResource $resource;
}
