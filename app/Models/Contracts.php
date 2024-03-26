<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Contracts
 * @package App\Models
 * @version March 4, 2024, 8:27 pm UTC
 *
 * @property string $ContractNo
 * @property string $Client
 * @property string $StartDate
 * @property number $ContractAmount
 */
class Contracts extends Model
{

    public $table = 'contracts';
    



    public $fillable = [
        'ContractNo',
        'Client',
        'StartDate',
        'ContractAmount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ContractNo' => 'string',
        'Client' => 'string',
        'StartDate' => 'date',
        'ContractAmount' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
