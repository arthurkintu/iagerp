<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class SubContractorTracker
 * @package App\Models
 * @version March 5, 2024, 5:33 am UTC
 *
 * @property string $Subconname
 * @property string $Taskorder
 * @property number $SubContractorFee
 * @property string $SubconPaymentStatus
 * @property string $Contractno
 * @property string $Tonumber
 * @property string $Subcontractordocument
 */
class SubContractorTracker extends Model
{

    public $table = 'subcontractortrackers';
    



    public $fillable = [
        'Subconname',
        'Taskorder',
        'SubContractorFee',
        'SubconPaymentStatus',
        'Contractno',
        'Tonumber',
        'Subcontractordocument'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Subconname' => 'string',
        'Taskorder' => 'string',
        'SubContractorFee' => 'float',
        'SubconPaymentStatus' => 'string',
        'Contractno' => 'string',
        'Tonumber' => 'string',
        'Subcontractordocument' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
