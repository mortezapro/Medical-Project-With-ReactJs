<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'exist' => $this->exist,
            'real_price' => $this->realPrice,
            "product_id" => $this->product_id,
            "value_id" => $this->value_id,
            'product' => $this->product,
        ];
    }
}
