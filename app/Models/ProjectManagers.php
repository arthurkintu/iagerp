<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ProjectManagers
 * @package App\Models
 * @version March 10, 2024, 8:02 am UTC
 *
 * @property string $Name
 */
class ProjectManagers extends Model
{

    public $table = 'projectmanagers';
    



    public $fillable = [
        'Name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
