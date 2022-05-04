<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class Cliente
 * @package App\Models
 * @version May 4, 2022, 4:02 pm CST
 *
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $certificados
 * @property \Illuminate\Database\Eloquent\Collection $clienteEmpresas
 * @property \Illuminate\Database\Eloquent\Collection $clienteTelefonos
 * @property integer $user_id
 * @property string $codigo
 * @property string $nombre_empresa
 * @property string $direccion
 * @property string|\Carbon\Carbon $fecha_registro
 * @property string|\Carbon\Carbon $fecha_vencimiento
 * @property string $nombre_representante_legal
 */
class Cliente extends Model implements HasMedia
{
    use InteractsWithMedia;
    use SoftDeletes;

    use HasFactory;

    public $table = 'clientes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'codigo',
        'nombre_empresa',
        'direccion',
        'fecha_registro',
        'fecha_vencimiento',
        'nombre_representante_legal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'codigo' => 'string',
        'nombre_empresa' => 'string',
        'direccion' => 'string',
        'fecha_registro' => 'datetime',
        'fecha_vencimiento' => 'datetime',
        'nombre_representante_legal' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'codigo' => 'required|string|max:8',
        'nombre_empresa' => 'required|string|max:200',
        'direccion' => 'required|string|max:45',
        'fecha_registro' => 'nullable',
        'fecha_vencimiento' => 'required',
        'nombre_representante_legal' => 'required|string|max:200',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function certificados()
    {
        return $this->hasMany(\App\Models\Certificado::class, 'cliente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clienteEmpresas()
    {
        return $this->hasMany(\App\Models\ClienteEmpresa::class, 'cliente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clienteTelefonos()
    {
        return $this->hasMany(\App\Models\ClienteTelefono::class, 'cliente_id');
    }
}
