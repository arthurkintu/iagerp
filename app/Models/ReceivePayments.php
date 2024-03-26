<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ReceivePayments
 * @package App\Models
 * @version March 20, 2024, 12:53 pm UTC
 *
 * @property string $ContractNo
 * @property string $TONumber
 * @property string $ReferenceNo
 * @property string $PaymentDocumentNo
 * @property string $DigitalCopy
 * @property string $InvoiceAmount
 * @property integer $TotalPaid
 * @property string $Bank
 * @property string $PaymentMethod
 */
class ReceivePayments extends Model
{

    public $table = 'receivepaymentss';
    



    public $fillable = [
        'ContractNo',
        'TONumber',
        'ReferenceNo',
        'PaymentDocumentNo',
        'DigitalCopy',
        'InvoiceAmount',
        'TotalPaid',
        'Bank',
        'PaymentMethod'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ContractNo' => 'string',
        'TONumber' => 'string',
        'ReferenceNo' => 'string',
        'PaymentDocumentNo' => 'string',
        'DigitalCopy' => 'string',
        'InvoiceAmount' => 'string',
        'TotalPaid' => 'integer',
        'Bank' => 'string',
        'PaymentMethod' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
