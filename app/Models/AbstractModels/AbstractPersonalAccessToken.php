<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractPersonalAccessToken
* @package App\Models\AbstractModels
*
* @property bigInteger $id
* @property string $tokenable_type
* @property bigInteger $tokenable_id
* @property string $name
* @property string $token
* @property text $abilities
* @property \Carbon\Carbon $last_used_at
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
*/ 
abstract class AbstractPersonalAccessToken extends Model
{
    /**  
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'personal_access_tokens';
    
    /**  
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tokenable_type' => 'string',
        'tokenable_id' => 'integer',
        'name' => 'string',
        'token' => 'string',
        'abilities' => 'string',
        'last_used_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
