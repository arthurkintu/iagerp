<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractSubcontractorcashierss
* @package App\Models\AbstractModels
*
* @property integer $id
* @property string $SubcontractorName
* @property string $TONumber
* @property string $Amount
* @property \Carbon\Carbon $Date
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
*/ 
abstract class AbstractSubcontractorcashierss extends Model
{
    /**  
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'subcontractorcashierss';
    
    /**  
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'SubcontractorName' => 'string',
        'TONumber' => 'string',
        'Amount' => 'string',
        'Date' => 'datetime:Y-m-d',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
