<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class LogErrore
 * @package App\Models
 * @version May 5, 2022, 1:40 pm CST
 *
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property string $description
 * @property string $modelo
 */
class LogErrore extends Model implements HasMedia
{
    use InteractsWithMedia;
    use SoftDeletes;

    use HasFactory;

    public $table = 'log_errores';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'description',
        'modelo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'description' => 'string',
        'modelo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'description' => 'required|string|max:500',
        'modelo' => 'required|string|max:200',
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
