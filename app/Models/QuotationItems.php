<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Eloquent as Model;

/**
 * Class QuotationItems
 * @package App\Models
 * @version March 21, 2024, 11:51 am UTC
 *
 * @property string $QuotationNumber
 * @property string $TONumber
 * @property string $ItemName
 * @property string $ItemUnit
 * @property string $Quantity
 * @property string $UnitPrice
 * @property string $TotalAmount
 */
class QuotationItems extends Model
{

    public $table = 'quotationitems';


    public $fillable = [
        'QuotationNumber',
        'TONumber',
        'ItemName',
        'ItemUnit',
        'Quantity',
        'UnitPrice',
        'TotalAmount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'QuotationNumber' => 'string',
        'TONumber' => 'string',
        'ItemName' => 'string',
        'ItemUnit' => 'string',
        'Quantity' => 'string',
        'UnitPrice' => 'string',
        'TotalAmount' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'QuotationNumber' => 'required',
        'TONumber' => 'required',
        'ItemName' => 'required',
        'ItemUnit' => 'required',
        'Quantity' => 'required|numeric',
        'UnitPrice' => 'required|numeric',
        'TotalAmount' => 'required|numeric',
    ];
    // Define the relationship with TONumber
    public function tonumber()
    {
        return $this->belongsTo(TONumber::class, 'TONumber', 'id'); 
    } 
}
