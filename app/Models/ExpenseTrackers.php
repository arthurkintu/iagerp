<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ExpenseTrackers
 * @package App\Models
 * @version March 20, 2024, 4:54 pm UTC
 *
 * @property number $GeneralExpenses
 * @property number $SupplierExpenses
 * @property number $SubcontractorExpenses
 * @property number $Payroll
 * @property number $PettyCashBalance
 */
class ExpenseTrackers extends Model
{

    public $table = 'expensetrackers';
    



    public $fillable = [
        'GeneralExpenses',
        'SupplierExpenses',
        'SubcontractorExpenses',
        'Payroll',
        'PettyCashBalance'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'GeneralExpenses' => 'double',
        'SupplierExpenses' => 'double',
        'SubcontractorExpenses' => 'double',
        'Payroll' => 'double',
        'PettyCashBalance' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
