<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerInvoicesResource extends JsonResource
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
            'TOAmount' => $this->TOAmount,
            'InvoicePercentage' => $this->InvoicePercentage,
            'InvoiceGroup' => $this->InvoiceGroup,
            'InvoiceStatus' => $this->InvoiceStatus,
            'InvoiceDate' => $this->InvoiceDate,
            'InvoiceAmount' => $this->InvoiceAmount,
            'InvoiceNumber' => $this->InvoiceNumber,
            'ContractNumber' => $this->ContractNumber,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
