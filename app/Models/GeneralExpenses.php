<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class GeneralExpenses
 * @package App\Models
 * @version March 20, 2024, 4:49 pm UTC
 *
 * @property string $ExpenseName
 * @property string $Amount
 * @property string $Date
 */
class GeneralExpenses extends Model
{

    public $table = 'generalexpensess';
    



    public $fillable = [
        'ExpenseName',
        'Amount',
        'Date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ExpenseName' => 'string',
        'Amount' => 'string',
        'Date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
