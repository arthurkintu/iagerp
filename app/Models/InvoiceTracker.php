<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class InvoiceTracker
 * @package App\Models
 * @version March 20, 2024, 1:08 pm UTC
 *
 * @property string $TONumber
 * @property string $TODescription
 * @property number $TOAmount
 * @property string $Location
 * @property string $TOPercetange
 * @property string $InvoiceStatus
 * @property integer $RemainingBalance
 * @property string $InvoiceGroup
 * @property string $ReceiptNo
 * @property integer $PaidAmount
 * @property string $BankName
 * @property integer $BudgetBalance
 */
class InvoiceTracker extends Model
{

    public $table = 'invoicetrackers';
    



    public $fillable = [
        'TONumber',
        'TODescription',
        'TOAmount',
        'Location',
        'TOPercetange',
        'InvoiceStatus',
        'RemainingBalance',
        'InvoiceGroup',
        'ReceiptNo',
        'PaidAmount',
        'BankName',
        'BudgetBalance'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'TONumber' => 'string',
        'TODescription' => 'string',
        'TOAmount' => 'double',
        'Location' => 'string',
        'TOPercetange' => 'string',
        'InvoiceStatus' => 'string',
        'RemainingBalance' => 'integer',
        'InvoiceGroup' => 'string',
        'ReceiptNo' => 'string',
        'PaidAmount' => 'integer',
        'BankName' => 'string',
        'BudgetBalance' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'TONumber' => 'required',
        'TODescription' => 'required',
        'TOAmount' => 'required',
        'Location' => 'required',
        'TOPercetange' => 'required',
        'InvoiceStatus' => 'required',
        'RemainingBalance' => 'required',
        'InvoiceGroup' => 'required',
        'ReceiptNo' => 'required',
        'PaidAmount' => 'required',
        'BankName' => 'required',
        'BudgetBalance' => 'required',
    ];

    
}
