<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class PurchaseOrders
 * @package App\Models
 * @version March 23, 2024, 9:44 am UTC
 *
 * @property string $TONumber
 * @property string $QuotationNo
 * @property number $TotalAmount
 * @property string $SupplierName
 * @property string $Description
 * @property string $Date
 */
class PurchaseOrders extends Model
{

    public $table = 'purchaseorders';
    



    public $fillable = [
        'TONumber',
        'QuotationNo',
        'TotalAmount',
        'SupplierName',
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
        'TotalAmount' => 'double',
        'SupplierName' => 'string',
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
