<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'is_admin' => $this->is_admin
        ];
    }

    public function with($request)
    {
        return [
            'author' => 'Jenwit Suwech',
            'version' => '1.0.0',
            'remark' => 'COPYRIGHT project Neon'
        ];
    }


}