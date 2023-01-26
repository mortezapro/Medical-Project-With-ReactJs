<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "title" => $this->title,
            "slug" => $this->slug,
            "thumbnail" => $this->thumbnail,
            "summary" => $this->summary,
            "content" => $this->content,
            "price" =>  $this->price,
            "brand" => new $this->brand,
            "categories" => $this->categories,
            "details" => $this->details,
        ];
    }
}
