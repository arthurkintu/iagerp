<?php

namespace App\Models;

use Eloquent as Model;
use Carbon\Carbon;
use DateTime;


/**
 * Class Employees
 * @package App\Models
 * @version March 26, 2024, 6:15 am UTC
 *
 * @property string $Name
 * @property string $Email
 * @property string $Phone
 * @property string $Department
 * @property string $Nationality
 * @property string $PassportExpiry
 * @property string $VisaExpiry
 * @property string $Photo
 * @property string $JobTitle
 * @property string $PassportNumber
 * @property string $Gender
 * @property string $UploadCV
 * @property string $UploadContract
 */
class Employees extends Model
{

    public $table = 'employees';
    



    public $fillable = [
        'Name',
        'Email',
        'Phone',
        'Department',
        'Nationality',
        'PassportExpiry',
        'VisaExpiry',
        'Photo',
        'JobTitle',
        'PassportNumber',
        'Gender',
        'UploadCV',
        'UploadContract'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'Email' => 'string',
        'Phone' => 'string',
        'Department' => 'string',
        'Nationality' => 'string',
        'PassportExpiry' => 'string',
        'VisaExpiry' => 'string',
        'Photo' => 'string',
        'JobTitle' => 'string',
        'PassportNumber' => 'string',
        'Gender' => 'string',
        'UploadCV' => 'string',
        'UploadContract' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|string',
        'Email' => 'nullable|string',
        'Phone' => 'nullable|string',
        'Department' => 'nullable|string',
        'Nationality' => 'nullable|string',
        'PassportExpiry' => 'nullable|string',
        'VisaExpiry' => 'nullable|string',
        'Photo' => 'nullable|string',
        'JobTitle' => 'required|string',
        'PassportNumber' => 'nullable|string',
        'Gender' => 'nullable|string',
        'UploadCV' => 'nullable',
        'UploadContract' => 'nullable'
    ];

    public function daysUntilPassportExpiry()
    {
        $passportExpiry = Carbon::parse($this->PassportExpiry);
        return Carbon::now()->diffInDays($passportExpiry, false);
    }

    public function daysUntilVisaExpiry()
    {
        $visaExpiry = Carbon::parse($this->VisaExpiry);
        return Carbon::now()->diffInDays($visaExpiry, false);
    }
    
}
