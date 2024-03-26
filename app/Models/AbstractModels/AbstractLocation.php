<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractLocation
* @package App\Models\AbstractModels
*
* @property integer $id
* @property string $LocationName
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
*/ 
abstract class AbstractLocation extends Model
{
    /**  
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'locations';
    
    /**  
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'LocationName' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
