<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResourse extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'bio'   => $this->bio,
            'uid' => $this->uid,
            'email' => $this->email,
            'role' => $this->role,
            'registered_at' => $this->created_at
        ];
    }
}
