<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ExternalAuth
 * @package App\Models
 * @version November 24, 2021, 2:09 pm CST
 *
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property string $external_auth
 * @property string $external_id
 * @property string $external_email
 * @property string $external_avatar
 */
class ExternalAuth extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'external_auths';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'external_auth',
        'external_id',
        'external_email',
        'external_avatar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'external_auth' => 'string',
        'external_id' => 'string',
        'external_email' => 'string',
        'external_avatar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'external_auth' => 'required|string|max:45',
        'external_id' => 'required|string|max:100',
        'external_email' => 'required|string|max:200',
        'external_avatar' => 'nullable|string|max:200',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
