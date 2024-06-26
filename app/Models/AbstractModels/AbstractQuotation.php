<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractQuotation
* @package App\Models\AbstractModels
*
* @property integer $id
* @property string $QuotationNo
* @property string $SupplierName
* @property string $TONumber
* @property \Carbon\Carbon $Date
* @property longText $Naration
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
* @property integer $quotationitem_id
* @property \App\Models\Quotationitem|null $quotationitem
*/ 
abstract class AbstractQuotation extends Model
{
    /**  
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'quotations';
    
    /**  
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'QuotationNo' => 'string',
        'SupplierName' => 'string',
        'TONumber' => 'string',
        'Date' => 'datetime:Y-m-d',
        'Naration' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'quotationitem_id' => 'integer'
    ];
    
    public function quotationitem()
    {
        return $this->belongsTo('\App\Models\Quotationitem', 'quotationitem_id', 'id');
    }
}
