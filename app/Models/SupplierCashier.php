<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class SupplierCashier
 * @package App\Models
 * @version March 20, 2024, 2:32 pm UTC
 *
 * @property string $TONumber
 * @property string $SupplierName
 * @property number $Amount
 * @property string $ReceiptNumber
 * @property string $AttachEvidence
 * @property string $PaymentDate
 */
class SupplierCashier extends Model
{

    public $table = 'suppliercashiers';
    



    public $fillable = [
        'TONumber',
        'SupplierName',
        'Amount',
        'ReceiptNumber',
        'AttachEvidence',
        'PaymentDate'
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
        'Amount' => 'double',
        'ReceiptNumber' => 'string',
        'AttachEvidence' => 'string',
        'PaymentDate' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'TONumber' => 'required',
        'SupplierName' => 'required',
        'Amount' => 'required',
        'ReceiptNumber' => 'required',
        'AttachEvidence' => 'required',
        'PaymentDate' => 'required',
    ];

    
}
