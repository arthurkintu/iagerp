<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class SubcontractorCosts
 * @package App\Models
 * @version March 25, 2024, 6:38 am UTC
 *
 * @property string $SubcontractorName
 * @property string $TONumber
 * @property number $SubConContractAmount
 * @property string $StartDate
 * @property string $UploadContract
 */
class SubcontractorCosts extends Model
{

    public $table = 'subcontractorcosts';
    



    public $fillable = [
        'SubcontractorName',
        'TONumber',
        'SubConContractAmount',
        'StartDate',
        'UploadContract'
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
        'SubConContractAmount' => 'double',
        'StartDate' => 'date',
        'UploadContract' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
