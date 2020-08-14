<?php

namespace App\Http\Resources;

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
            'news' => $this->news,
            'user_id' => $this->user_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ];
    }
}
