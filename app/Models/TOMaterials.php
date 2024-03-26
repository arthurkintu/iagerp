<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TOMaterials
 * @package App\Models
 * @version March 21, 2024, 5:49 am UTC
 *
 * @property string $TONumber
 * @property string $ItemName
 * @property string $UnitofMeasurement
 * @property number $Quantity
 * @property string $Date
 * @property string $RequestedBy
 */
class TOMaterials extends Model
{

    public $table = 'tomaterials';
    



    public $fillable = [
        'TONumber',
        'ItemName',
        'UnitofMeasurement',
        'Quantity',
        'Date',
        'RequestedBy'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'TONumber' => 'string',
        'ItemName' => 'string',
        'UnitofMeasurement' => 'string',
        'Quantity' => 'double',
        'Date' => 'date',
        'RequestedBy' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
