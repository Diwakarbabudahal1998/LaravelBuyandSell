<?php

namespace App\Http\Resources\Realestate;

use Illuminate\Http\Resources\Json\Resource;
use App\User;

class CommentCollection extends Resource
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
            'Comment'=> $this->body,
            'username'=>User::where('id',$this->user_id)->pluck('name'),


            // 'username'=>$username,
           
        ];  
    }  
}
