<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeesResource extends JsonResource
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
            'Email' => $this->Email,
            'Phone' => $this->Phone,
            'Department' => $this->Department,
            'Nationality' => $this->Nationality,
            'PassportExpiry' => $this->PassportExpiry,
            'VisaExpiry' => $this->VisaExpiry,
            'Photo' => $this->Photo,
            'JobTitle' => $this->JobTitle,
            'PassportNumber' => $this->PassportNumber,
            'Gender' => $this->Gender,
            'UploadCV' => $this->UploadCV,
            'UploadContract' => $this->UploadContract,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
