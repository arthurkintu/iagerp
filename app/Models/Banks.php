<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Banks
 * @package App\Models
 * @version March 4, 2024, 8:32 pm UTC
 *
 * @property string $BankName
 * @property string $BankAccount
 */
class Banks extends Model
{

    public $table = 'banks';
    



    public $fillable = [
        'BankName',
        'BankAccount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'BankName' => 'string',
        'BankAccount' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
