<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PostResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return [
        //     'titulo' => $this->resource->title,
        //     'cuerpo' => $this->resource->body,
        //     'owner' => $this->resource->owner
        // ];
    }
}
