<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Quotations
 * @package App\Models
 * @version March 21, 2024, 11:43 am UTC
 *
 * @property string $QuotationNo
 * @property string $SupplierName
 * @property string $TONumber
 * @property string $Date
 * @property string $Naration
 */
class Quotations extends Model
{

    public $table = 'quotations';
    



    public $fillable = [
        'QuotationNo',
        'SupplierName',
        'TONumber',
        'Date',
        'Naration'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'QuotationNo' => 'string',
        'SupplierName' => 'string',
        'TONumber' => 'string',
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
