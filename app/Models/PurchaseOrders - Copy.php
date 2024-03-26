<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class PurchaseOrders
 * @package App\Models
 * @version March 23, 2024, 5:49 am UTC
 *
 * @property string $TONumber
 * @property string $QuotationNo
 * @property string $SupplierName
 * @property string $TotalAmount
 * @property string $Description
 * @property string $Date
 */
class PurchaseOrders extends Model
{

    public $table = 'purchaseorders';
    



    public $fillable = [
        'TONumber',
        'QuotationNo',
        'SupplierName',
        'TotalAmount',
        'Description',
        'Date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'TONumber' => 'string',
        'QuotationNo' => 'string',
        'SupplierName' => 'string',
        'TotalAmount' => 'string',
        'Description' => 'string',
        'Date' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
