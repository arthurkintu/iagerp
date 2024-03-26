<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Locations
 * @package App\Models
 * @version March 4, 2024, 8:31 pm UTC
 *
 * @property string $LocationName
 */
class Locations extends Model
{

    public $table = 'locations';
    



    public $fillable = [
        'LocationName'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'LocationName' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
