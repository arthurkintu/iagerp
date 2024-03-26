<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Clients
 * @package App\Models
 * @version March 4, 2024, 8:29 pm UTC
 *
 * @property string $ClientName
 * @property string $Location
 */
class Clients extends Model
{

    public $table = 'clients';
    



    public $fillable = [
        'ClientName',
        'Location'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ClientName' => 'string',
        'Location' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
