<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LocalPOsResource extends JsonResource
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
            'SupplierName' => $this->SupplierName,
            'Description' => $this->Description,
            'Amount' => $this->Amount,
            'Date' => $this->Date,
            'QuotationNo' => $this->QuotationNo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
