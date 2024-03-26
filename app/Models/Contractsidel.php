<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public $table = 'contracts';

    protected $fillable = [
        'ContractNo',
        'Client',
        'StartDate',
        'ContractAmount'
    ];

    protected $casts = [
        'id' => 'integer',
        'ContractNo' => 'string',
        'Client' => 'string',
        'StartDate' => 'date',
        'ContractAmount' => 'float'
    ];

    public static $rules = [
        // Define validation rules here if needed
    ];

}
