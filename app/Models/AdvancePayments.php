<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AdvancePayments
 * @package App\Models
 * @version March 26, 2024, 2:36 pm UTC
 *
 * @property string $Name
 * @property number $AmountRequested
 * @property string $Date
 */
class AdvancePayments extends Model
{

    public $table = 'advancepaymentss';
    



    public $fillable = [
        'Name',
        'AmountRequested',
        'Date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'AmountRequested' => 'double',
        'Date' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
