<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class SupplierInvoices
 * @package App\Models
 * @version March 20, 2024, 10:08 am UTC
 *
 * @property string $SupplierInvoiceNumber
 * @property string $LpoNumber
 * @property string $Description
 * @property string $SuppliedItems
 * @property integer $LpoAmount
 * @property string $SupplierName
 * @property string $Date
 */
class SupplierInvoices extends Model
{

    public $table = 'supplierinvoices';
    



    public $fillable = [
        'SupplierInvoiceNumber',
        'LpoNumber',
        'Description',
        'SuppliedItems',
        'LpoAmount',
        'SupplierName',
        'Date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'SupplierInvoiceNumber' => 'string',
        'LpoNumber' => 'string',
        'SuppliedItems' => 'string',
        'LpoAmount' => 'integer',
        'SupplierName' => 'string',
        'Date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
