<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskOrderCostsResource extends JsonResource
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
            'QuotationNumber' => $this->QuotationNumber,
            'ItemName' => $this->ItemName,
            'ItemUnit' => $this->ItemUnit,
            'TotalAmount' => $this->TotalAmount,
            'Quantity' => $this->Quantity,
            'UnitPrice' => $this->UnitPrice,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
