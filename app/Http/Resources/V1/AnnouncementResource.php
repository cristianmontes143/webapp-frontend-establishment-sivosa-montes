<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class AnnouncementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
        'id' => $this->id,
        'header' => $this->header,
        'subheader' => $this->sub_header,
        'image' => $this->image,
        'description' => $this->description,
        'userId' => $this->user_id,
        'created' => $this->created_at,
        'updated' => $this->updated_at,
        
        ];
       // return parent::toArray($request);
    }
}
