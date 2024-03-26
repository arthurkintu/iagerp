<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class GRN
 * @package App\Models
 * @version March 5, 2024, 5:39 am UTC
 *
 * @property string $Suppliername
 * @property string $Quotations
 * @property string $GRNphysicalcopy
 * @property string $GRNcomments
 */
class GRN extends Model
{

    public $table = 'grns';
    



    public $fillable = [
        'Suppliername',
        'Quotations',
        'GRNphysicalcopy',
        'GRNcomments'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Suppliername' => 'string',
        'Quotations' => 'string',
        'GRNphysicalcopy' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
