<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CitizenResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        //basically return everything. When we need to format
        return parent::toArray($request);
    }
}
