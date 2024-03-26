<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeaveApplicationResource extends JsonResource
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
            'Name' => $this->Name,
            'ApplicationDate' => $this->ApplicationDate,
            'StartDate' => $this->StartDate,
            'EndDate' => $this->EndDate,
            'Telephone' => $this->Telephone,
            'Delegated' => $this->Delegated,
            'Remarks' => $this->Remarks,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
