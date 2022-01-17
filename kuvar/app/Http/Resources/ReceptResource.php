<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReceptResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'recept';
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'=>$this->resource->id,
            'title'=>$this->resource->title,
            'body'=>$this->resource->body,
            'vrsta'=>$this->resource->vrsta,
            'zemlja'=>$this->resource->zemlja,
            'user' => new UserResource($this->resource->user)
        ];
    }
}
