<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CustomerInvoices
 * @package App\Models
 * @version March 4, 2024, 8:57 pm UTC
 *
 * @property string $InvoiceNumber
 * @property string $TONumber
 * @property number $InvoincePercent
 * @property number $TOAmount
 * @property string $InvoiceGroup
 * @property string $InvoiceDate
 * @property string $Status
 */
class CustomerInvoices extends Model
{

    public $table = 'customerinvoices';
    



    public $fillable = [
        'InvoiceNumber',
        'TONumber',
        'InvoincePercent',
        'TOAmount',
        'InvoiceGroup',
        'InvoiceDate',
        'Status'
        'invoiceamount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'InvoiceNumber' => 'string',
        'TONumber' => 'string',
        'InvoincePercent' => 'float',
        'TOAmount' => 'float',
        'InvoiceGroup' => 'string',
        'InvoiceDate' => 'date',
        'Status' => 'string'
        'invoiceamount' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'invoicenumber' => 'Required'
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