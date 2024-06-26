<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractQuotationitem
* @package App\Models\AbstractModels
*
* @property integer $id
* @property string $QuotationNumber
* @property string $TONumber
* @property string $ItemName
* @property string $ItemUnit
* @property string $Quantity
* @property string $UnitPrice
* @property string $TotalAmount
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
* @property \Illuminate\Database\Eloquent\Collection $quotations
* @property \App\Models\Taskordercostss|null $taskordercostsses
*/ 
abstract class AbstractQuotationitem extends Model
{
    /**  
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'quotationitems';
    
    /**  
     * The attributes that should be cast to native types.
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
        'TotalAmount' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    
    public function quotations()
    {
        return $this->hasMany('\App\Models\Quotation', 'quotationitem_id', 'id');
    }
    
    public function taskordercostsses()
    {
        return $this->hasOne('\App\Models\Taskordercostss', 'quotationitem_id', 'id');
    }
}
