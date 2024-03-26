<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContractsResource extends JsonResource
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
            'ContractNo' => $this->ContractNo,
            'Client' => $this->Client,
            'StartDate' => $this->StartDate,
            'ContractAmount' => $this->ContractAmount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
