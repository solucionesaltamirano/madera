<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class Item
 * @package App\Models
 * @version December 2, 2021, 1:09 am CST
 *
 * @property \Illuminate\Database\Eloquent\Collection $menus
 * @property string $name
 * @property string $description
 * @property string $route
 * @property string $icon
 * @property integer $item_id
 */
class Item extends Model implements HasMedia
{
    use InteractsWithMedia;
    use SoftDeletes;

    use HasFactory;

    public $table = 'items';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'route',
        'icon',
        'item_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'route' => 'string',
        'icon' => 'string',
        'item_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:45',
        'description' => 'required|string|max:140',
        'route' => 'required|string|max:100',
        'icon' => 'required|string|max:100',
        'item_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function menus()
    {
        return $this->belongsToMany(\App\Models\Menu::class, 'menus_has_items');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function parent()
    {
        return $this->belongsTo(\App\Models\Item::class, 'item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function childs()
    {
        return $this->hasMany(\App\Models\Item::class, 'item_id');
    }
}
