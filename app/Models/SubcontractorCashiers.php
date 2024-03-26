<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class SubcontractorCashiers
 * @package App\Models
 * @version March 20, 2024, 4:44 pm UTC
 *
 * @property string $SubcontractorName
 * @property string $TONumber
 * @property string $Amount
 * @property string $Date
 */
class SubcontractorCashiers extends Model
{

    public $table = 'subcontractorcashierss';
    



    public $fillable = [
        'SubcontractorName',
        'TONumber',
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
        'SubcontractorName' => 'string',
        'TONumber' => 'string',
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
