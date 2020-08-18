<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'news' => $this->news,
            'type' => TypeResource::make($this->type),
            'author' => UserResource::make($this->creator),
            'images' => FileResource::collection($this->images),
            'files' => FileResource::collection($this->files),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
