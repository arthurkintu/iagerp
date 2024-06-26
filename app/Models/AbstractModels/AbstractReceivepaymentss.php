<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractReceivepaymentss
* @package App\Models\AbstractModels
*
* @property integer $id
* @property string $ContractNo
* @property string $TONumber
* @property string $ReferenceNo
* @property string $PaymentDocumentNo
* @property string $DigitalCopy
* @property string $InvoiceAmount
* @property bigInteger $TotalPaid
* @property string $Bank
* @property string $PaymentMethod
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
*/ 
abstract class AbstractReceivepaymentss extends Model
{
    /**  
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'receivepaymentss';
    
    /**  
     * The attributes that should be cast to native types.
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
        'PaymentMethod' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
