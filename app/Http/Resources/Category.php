<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         $c=Category::collection(\App\Models\Category::where('parent_id',$this->id)->get());
         return [
             'id'=>$this->id,
            'name' => $this->name,
            'children'=>(count($c)==0)?null:$c,
         ];
    }

}
