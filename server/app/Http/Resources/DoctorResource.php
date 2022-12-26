<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class DoctorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request):array
    {
        return [
            "full_name" => $this->full_name,
            "username" => $this->username,
            "expert" => $this->expert,
            "avatar" => $this->avatar,
            "online_counseling" => $this->online_counseling,
            "office_address" => $this->office_address,

        ];
    }
}
