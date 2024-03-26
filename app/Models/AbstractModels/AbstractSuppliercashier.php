<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractSuppliercashier
* @package App\Models\AbstractModels
*
* @property integer $id
* @property string $TONumber
* @property string $SupplierName
* @property double $Amount
* @property string $ReceiptNumber
* @property string $AttachEvidence
* @property \Carbon\Carbon $PaymentDate
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
*/ 
abstract class AbstractSuppliercashier extends Model
{
    /**  
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'suppliercashiers';
    
    /**  
     * The attributes that should be cast to native types.
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
        'PaymentDate' => 'datetime:Y-m-d',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
