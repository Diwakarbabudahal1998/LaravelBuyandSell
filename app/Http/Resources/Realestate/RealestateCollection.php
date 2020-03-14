<?php

namespace App\Http\Resources\Realestate;

use Illuminate\Http\Resources\Json\Resource;

class RealestateCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'property_name'=> $this->property_name,
            'location'=>$this->district.''.$this->ward_number.''.$this->country,
            'property_status'=>$this->property_status,
            'number_of_bedrooms'=> $this->number_of_bedrooms,
            'number_of_bathrooms'=> $this->number_of_bathrooms,
            'property_area'=> $this->property_area,
            'listed_on'=> $this->created_at,
            'href'=>[
                'singleview'=>route('realestates.show',$this->id),
            ]
        ];
    }
}
