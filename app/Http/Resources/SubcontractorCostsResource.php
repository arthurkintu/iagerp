<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubcontractorCostsResource extends JsonResource
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
            'SubcontractorName' => $this->SubcontractorName,
            'TONumber' => $this->TONumber,
            'SubConContractAmount' => $this->SubConContractAmount,
            'StartDate' => $this->StartDate,
            'UploadContract' => $this->UploadContract,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
