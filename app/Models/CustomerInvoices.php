<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CustomerInvoices
 * @package App\Models
 * @version March 23, 2024, 9:41 am UTC
 * @property \App\Models\Taskorders $taskorders
 * @property string $TONumber
 * @property string $TOAmount
 * @property string $InvoicePercentage
 * @property string $InvoiceGroup
 * @property string $InvoiceStatus
 * @property string $InvoiceDate
 * @property number $InvoiceAmount
 * @property string $InvoiceNumber
 * @property string $ContractNumber
 */
class CustomerInvoices extends Model
{

    public $table = 'customer_invoices';
    



    public $fillable = [
        'TONumber',
        'TOAmount',
        'InvoicePercentage',
        'InvoiceGroup',
        'InvoiceStatus',
        'InvoiceDate',
        'InvoiceAmount',
        'InvoiceNumber',
        'ContractNumber'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'TONumber' => 'string',
        'TOAmount' => 'string',
        'InvoicePercentage' => 'string',
        'InvoiceGroup' => 'string',
        'InvoiceStatus' => 'string',
        'InvoiceDate' => 'date',
        'InvoiceAmount' => 'double',
        'InvoiceNumber' => 'string',
        'ContractNumber' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'TONumber' => 'required',
        'TOAmount' => 'required|numeric',
        'InvoicePercentage' => 'required|numeric',
        'InvoiceGroup' => 'required',
        'InvoiceStatus' => 'required',
        'InvoiceDate' => 'required|date',
        'InvoiceAmount' => 'required|numeric',
        'InvoiceNumber' => 'required',
        'ContractNumber' => 'required',
    ];

    
}



// CustomerInvoices.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerInvoices extends Model
{
    // Define the relationship
    public function taskOrders()
    {
        return $this->hasOne(\App\Models\TaskOrders::class);
    }
}