<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TOMaterialsResource extends JsonResource
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
            'TONumber' => $this->TONumber,
            'ItemName' => $this->ItemName,
            'UnitofMeasurement' => $this->UnitofMeasurement,
            'Quantity' => $this->Quantity,
            'Date' => $this->Date,
            'RequestedBy' => $this->RequestedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
