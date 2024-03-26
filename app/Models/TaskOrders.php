<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TaskOrders
 * @package App\Models
 * @version March 4, 2024, 8:49 pm UTC
 *
 * @property string $TONumber
 * @property string $Todescription
 * @property string $ContractNo
 * @property string $Topnumber
 * @property string $Wbsenumber
 * @property string $PM
 * @property string $Startdate
 * @property string $CompletionDate
 * @property string $ApprovalDate
 * @property string $UniqueNumber
 * @property string $Location
 * @property number $TOAmount
 */
class TaskOrders extends Model
{

    public $table = 'taskorders';
    



    public $fillable = [
        'TONumber',
        'Todescription',
        'ContractNo',
        'Topnumber',
        'Wbsenumber',
        'PM',
        'Startdate',
        'CompletionDate',
        'ApprovalDate',
        'UniqueNumber',
        'Location',
        'TOAmount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'TONumber' => 'string',
        'ContractNo' => 'string',
        'Topnumber' => 'string',
        'Wbsenumber' => 'string',
        'PM' => 'string',
        'Startdate' => 'date',
        'CompletionDate' => 'date',
        'ApprovalDate' => 'date',
        'UniqueNumber' => 'string',
        'Location' => 'string',
        'TOAmount' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'TONumber' => 'required',
        'Todescription' => 'required',
        'ContractNo' => 'required',
        'Topnumber' => 'required',
        'Wbsenumber' => 'required',
        'PM' => 'required',
        'Startdate' => 'required',
        'CompletionDate' => 'required',
        'ApprovalDate' => 'required',
        'UniqueNumber' => 'required',
        'Location' => 'required',
        'TOAmount' => 'required|numeric',
    ];

        /**
     * Get the quotation items associated with the task order.
     */
    public function quotationItems()
    {
        return $this->hasMany(QuotationItems::class, 'TONumber', 'TONumber');
    }
    
    public function totalAmountByTONumber()
    {
        return $this->quotationItems()->selectRaw('TONumber, SUM(TotalAmount) as totalAmount')
            ->groupBy('TONumber')
            ->pluck('totalAmount', 'TONumber');
    }
    

}
