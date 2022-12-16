<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request):array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'seo_image' => $this->seo_image,
            'content' => $this->content,
            'status' => $this->status,
            'user_id' => $this->user_id,
            'indexable' => $this->indexable,
            'highlight' => $this->highlight,
            'canonical' => $this->canonical,
            'thumbnail' => $this->thumbnail,
            'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}
