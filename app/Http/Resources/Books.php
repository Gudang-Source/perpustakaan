<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Books extends JsonResource
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
            'status' => 'success',
            'message' => 'books data',
            'data' => parent::toArray($request),
       ];
    }
}
