<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseOrdersResource extends JsonResource
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
            'QuotationNo' => $this->QuotationNo,
            'TotalAmount' => $this->TotalAmount,
            'SupplierName' => $this->SupplierName,
            'Description' => $this->Description,
            'Date' => $this->Date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
