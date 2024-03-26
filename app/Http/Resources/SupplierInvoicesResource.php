<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplierInvoicesResource extends JsonResource
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
            'SupplierInvoiceNumber' => $this->SupplierInvoiceNumber,
            'LpoNumber' => $this->LpoNumber,
            'Description' => $this->Description,
            'SuppliedItems' => $this->SuppliedItems,
            'LpoAmount' => $this->LpoAmount,
            'SupplierName' => $this->SupplierName,
            'Date' => $this->Date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
