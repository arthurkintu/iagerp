<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TaskOrderProposals
 * @package App\Models
 * @version March 4, 2024, 8:42 pm UTC
 *
 * @property string $TOPNumber
 * @property string $TOPTitle
 * @property string $Location
 * @property string $TOPDocuments
 * @property string $SubmissionDate
 * @property string $TOPDescription
 * @property number $TOPAmount
 */
class TaskOrderProposals extends Model
{

    public $table = 'taskorderproposals';
    



    public $fillable = [
        'TOPNumber',
        'TOPTitle',
        'Location',
        'TOPDocuments',
        'SubmissionDate',
        'TOPDescription',
        'TOPAmount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'TOPNumber' => 'string',
        'TOPTitle' => 'string',
        'Location' => 'string',
        'TOPDocuments' => 'string',
        'SubmissionDate' => 'date',
        'TOPAmount' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
