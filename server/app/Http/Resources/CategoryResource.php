<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'seo_image' => $this->seo_image,
            'indexable' => $this->indexable,
            'highlight' => $this->highlight,
            'canonical' => $this->canonical,
            'thumbnail' => $this->thumbnail,
            'created_at' => $this->created_at,
            "keys" => $this->keys,
            "categories" => $this->categories
        ];
    }
}
