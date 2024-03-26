<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Payroll
 * @package App\Models
 * @version March 26, 2024, 2:27 pm UTC
 *
 * @property string $Name
 * @property string $Salary
 * @property string $Deductions
 * @property string $DaysofAttendance
 * @property string $AdvancePayments
 */
class Payroll extends Model
{

    public $table = 'payrolls';
    



    public $fillable = [
        'Name',
        'Salary',
        'Deductions',
        'DaysofAttendance',
        'AdvancePayments'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'Salary' => 'string',
        'Deductions' => 'string',
        'DaysofAttendance' => 'string',
        'AdvancePayments' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
