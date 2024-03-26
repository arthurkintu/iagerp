<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CustomerInvoices
 * @package App\Models
 * @version March 16, 2024, 9:54 am UTC
 *
 * @property \App\Models\Taskorders $taskorders
 * @property string $TONumber
 * @property integer $TOAmount
 * @property string $InvoicePercentage
 * @property string $InvoiceGroup
 * @property string $InvoiceStatus
 * @property string $InvoiceDate
 * @property integer $InvoiceAmount
 * @property string $InvoiceNumber
 * @property string $ContractNumber
 */
class CustomerInvoices extends Model
{

    public $table = 'customerinvoicess';
    



    public $fillable = [
        'TONumber',
        'TOAmount',
        'InvoicePercentage',
        'InvoiceGroup',
        'InvoiceStatus',
        'InvoiceDate',
        'InvoiceAmount',
        'InvoiceNumber',
        'ContractNo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'TONumber' => 'string',
        'TOAmount' => 'integer',
        'InvoicePercentage' => 'string',
        'InvoiceGroup' => 'string',
        'InvoiceStatus' => 'string',
        'InvoiceDate' => 'date',
        'InvoiceAmount' => 'integer',
        'InvoiceNumber' => 'string',
        'ContractNo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'InvoiceDate' => 'required|date', // Add validation rule for date
        'InvoiceNumber' => 'required|string|max:255', // Add validation rule for invoice number
        'InvoiceAmount' => 'required|numeric', // Add validation rule for invoice amount
        // Add other validation rules for remaining fields if necessary
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