<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsShortResource extends JsonResource
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
            'news' => Str::limit($this->news, 50, '...'),
            'type' => TypeResource::make($this->type),
            // 'author' => UserResource::make($this->author),
            'images' => FileResource::collection($this->images),
            'files' => FileResource::collection($this->files),
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ];
    }
}
