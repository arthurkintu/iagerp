<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class LeaveApplication
 * @package App\Models
 * @version March 26, 2024, 2:02 pm UTC
 *
 * @property string $Name
 * @property string $ApplicationDate
 * @property string $StartDate
 * @property string $EndDate
 * @property string $Telephone
 * @property string $Delegated
 * @property string $Remarks
 */
class LeaveApplication extends Model
{

    public $table = 'leaveapplications';
    



    public $fillable = [
        'Name',
        'ApplicationDate',
        'StartDate',
        'EndDate',
        'Telephone',
        'Delegated',
        'Remarks'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'ApplicationDate' => 'string',
        'StartDate' => 'string',
        'EndDate' => 'string',
        'Telephone' => 'string',
        'Delegated' => 'string',
        'Remarks' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
