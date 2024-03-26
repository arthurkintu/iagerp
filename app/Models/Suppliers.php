<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Suppliers
 * @package App\Models
 * @version March 20, 2024, 12:06 pm UTC
 *
 * @property string $SupplierName
 * @property string $Location
 * @property string $SupplierContact
 * @property string $SupplierBalance
 */
class Suppliers extends Model
{

    public $table = 'suppliers';
    



    public $fillable = [
        'SupplierName',
        'Location',
        'SupplierContact',
        'SupplierBalance'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'SupplierName' => 'string',
        'Location' => 'string',
        'SupplierContact' => 'string',
        'SupplierBalance' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
