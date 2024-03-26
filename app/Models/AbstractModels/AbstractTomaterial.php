<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractTomaterial
* @package App\Models\AbstractModels
*
* @property integer $id
* @property string $TONumber
* @property string $ItemName
* @property string $UnitofMeasurement
* @property double $Quantity
* @property \Carbon\Carbon $Date
* @property string $RequestedBy
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
*/ 
abstract class AbstractTomaterial extends Model
{
    /**  
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tomaterials';
    
    /**  
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'TONumber' => 'string',
        'ItemName' => 'string',
        'UnitofMeasurement' => 'string',
        'Quantity' => 'double',
        'Date' => 'datetime:Y-m-d',
        'RequestedBy' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}