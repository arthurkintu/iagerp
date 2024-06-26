<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractSubcontractor
* @package App\Models\AbstractModels
*
* @property integer $id
* @property string $SubConName
* @property double $SubConNameBalance
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
*/ 
abstract class AbstractSubcontractor extends Model
{
    /**  
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'subcontractors';
    
    /**  
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'SubConName' => 'string',
        'SubConNameBalance' => 'double',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
