<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeviceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $type = $this->deviceable_type == 'App\Office' ? 1 : 0;
        return [
            'id' => $this->id,
            'room'  => $this->room,
            'ip'    => $this->ip,
            'type'  => $type == 0 ? 'Hall' : 'Office',
            'instructor'   => $this->when($type == 1, $this->deviceable->instructor),  
            'bio'   => $this->when($type == 1, $this->deviceable->bio),
        ];

    }
}
