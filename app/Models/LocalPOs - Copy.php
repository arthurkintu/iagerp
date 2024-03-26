<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class LocalPOs
 * @package App\Models
 * @version March 22, 2024, 9:38 am UTC
 *
 * @property \App\Models\Taskorders $id
 * @property \App\Models\Quotations $quotations
 * @property string $TONumber
 * @property string $SupplierName
 * @property string $Description
 * @property number $Amount
 * @property string $Date
 * @property string $QuotationNo
 * @property number $TotalAmount
 */
class LocalPOs extends Model
{

    public $table = 'lpos';
    



    public $fillable = [
        'TONumber',
        'SupplierName',
        'Description',
        'Amount',
        'Date',
        'QuotationNo',
        'TotalAmount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'TONumber' => 'string',
        'SupplierName' => 'string',
        'TotalAmount' => 'double',
        'Date' => 'date',
        'QuotationNo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'TONumber' => 'required',
        'SupplierName' => 'required',
        'Description' => 'required',
        'TotalAmount' => 'required|numeric',
        'Date' => 'required|date',
        'QuotationNo' => 'required',
    ];

    

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function id()
    {
        return $this->belongsTo(\App\Models\Taskorders::class, 'id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function quotations()
    {
        return $this->hasOne(\App\Models\Quotations::class, 'id', 'id');
    }
}
