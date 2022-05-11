<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class Certificado
 * @package App\Models
 * @version May 5, 2022, 10:42 am CST
 *
 * @property \App\Models\Cliente $cliente
 * @property \App\Models\ClienteEmpresa $empresa
 * @property integer $cliente_id
 * @property integer $empresa_id
 * @property integer $secuencial
 * @property string $fecha
 * @property string $descripcion
 * @property integer $cantidad
 * @property number $humedad
 * @property string $fecha_inicio
 * @property time $hora_inicio
 * @property string $fecha_fin
 * @property time $hora_fin
 * @property number $temperatura_inicio
 * @property number $temperatura_fin
 */
class Certificado extends Model implements HasMedia
{
    use InteractsWithMedia;
    use SoftDeletes;

    use HasFactory;

    public $table = 'certificados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cliente_id',
        'empresa_id',
        'secuencial',
        'fecha',
        'descripcion',
        'destino',
        'cantidad',
        'humedad',
        'fecha_inicio',
        'hora_inicio',
        'fecha_fin',
        'hora_fin',
        'temperatura_inicio',
        'temperatura_fin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cliente_id' => 'integer',
        'empresa_id' => 'integer',
        'secuencial' => 'integer',
        'fecha' => 'date',
        'descripcion' => 'string',
        'destino' => 'string',
        'cantidad' => 'integer',
        'humedad' => 'decimal:2',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'temperatura_inicio' => 'decimal:2',
        'temperatura_fin' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cliente_id' => 'required',
        'empresa_id' => 'required|integer',
        'secuencial' => 'nullable',
        'fecha' => 'nullable',
        'descripcion' => 'required|string|max:200',
        'destino' => 'required|string|max:300',
        'cantidad' => 'required',
        'humedad' => 'required|numeric',
        'fecha_inicio' => 'required',
        'hora_inicio' => 'required',
        'fecha_fin' => 'required',
        'hora_fin' => 'required',
        'temperatura_inicio' => 'required|numeric',
        'temperatura_fin' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function empresa()
    {
        return $this->belongsTo(\App\Models\ClienteEmpresa::class, 'empresa_id');
    }
}
