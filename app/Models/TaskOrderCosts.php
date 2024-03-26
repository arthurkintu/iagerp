<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TaskOrderCosts
 * @package App\Models
 * @version March 24, 2024, 5:54 am UTC
 *
 * @property \App\Models\QuoatationItems $quoatationItems
 * @property \App\Models\taskorders $id
 * @property string $TONumber
 * @property string $QuotationNumber
 * @property string $ItemName
 * @property string $ItemUnit
 * @property string $TotalAmount
 * @property string $Quantity
 * @property string $UnitPrice
 */
class TaskOrderCosts extends Model
{

    public $table = 'taskordercostss';
    



    public $fillable = [
        'TONumber',
        'QuotationNumber',
        'ItemName',
        'ItemUnit',
        'TotalAmount',
        'Quantity',
        'UnitPrice'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'TONumber' => 'string',
        'QuotationNumber' => 'string',
        'ItemName' => 'string',
        'ItemUnit' => 'string',
        'TotalAmount' => 'string',
        'Quantity' => 'string',
        'UnitPrice' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function quoatationItems()
    {
        return $this->hasOne(\App\Models\QuoatationItems::class, 'id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function id()
    {
        return $this->belongsTo(\App\Models\taskorders::class, 'id', 'id');
    }
}
