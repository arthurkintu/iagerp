<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Subcontractors
 * @package App\Models
 * @version March 4, 2024, 8:34 pm UTC
 *
 * @property string $SubConName
 * @property number $SubConNameBalance
 */
class Subcontractors extends Model
{

    public $table = 'subcontractors';
    



    public $fillable = [
        'SubConName',
        'SubConNameBalance'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'SubConName' => 'string',
        'SubConNameBalance' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
