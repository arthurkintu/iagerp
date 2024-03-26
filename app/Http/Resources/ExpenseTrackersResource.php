<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseTrackersResource extends JsonResource
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
            'GeneralExpenses' => $this->GeneralExpenses,
            'SupplierExpenses' => $this->SupplierExpenses,
            'SubcontractorExpenses' => $this->SubcontractorExpenses,
            'Payroll' => $this->Payroll,
            'PettyCashBalance' => $this->PettyCashBalance,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
