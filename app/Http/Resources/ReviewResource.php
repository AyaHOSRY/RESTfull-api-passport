<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ReviewResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      //  return parent::toArray($request);
      //if i want a specific data or i want to give another names to it incase we change the name in database
      return [
        'customer' => $this->customer,
        'body' => $this->review,
        'star' => $this->star,
        
       ];
    }
}
