<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractContract
* @package App\Models\AbstractModels
*
* @property integer $id
* @property string $ContractNo
* @property string $Client
* @property \Carbon\Carbon $StartDate
* @property double $ContractAmount
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
*/ 
abstract class AbstractContract extends Model
{
    /**  
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'contracts';
    
    /**  
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ContractNo' => 'string',
        'Client' => 'string',
        'StartDate' => 'datetime:Y-m-d',
        'ContractAmount' => 'double',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}