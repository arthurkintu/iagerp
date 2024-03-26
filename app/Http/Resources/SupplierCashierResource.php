<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplierCashierResource extends JsonResource
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
            'Amount' => $this->Amount,
            'ReceiptNumber' => $this->ReceiptNumber,
            'AttachEvidence' => $this->AttachEvidence,
            'PaymentDate' => $this->PaymentDate,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
