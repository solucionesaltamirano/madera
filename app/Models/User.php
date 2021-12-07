<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version November 24, 2021, 12:33 pm CST
 *
 * @property \Illuminate\Database\Eloquent\Collection $externalAuths
 * @property \Illuminate\Database\Eloquent\Collection $chatSends
 * @property \Illuminate\Database\Eloquent\Collection $chatReceives
 * @property \Illuminate\Database\Eloquent\Collection $myChatRooms
 * @property \Illuminate\Database\Eloquent\Collection $chatRoomAssigneds
 * @property string $name
 * @property string $email
 * @property string $username
 * @property string $phone
 * @property string $profile_photo_path
 * @property string $password
 * @property string $two_factor_secret
 * @property string $two_factor_recovery_codes
 * @property string $remember_token
 * @property integer $current_team_id
 * @property string|\Carbon\Carbon $email_verified_at
 */
class User extends Authenticatable implements HasMedia
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use InteractsWithMedia;
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'phone',
        'profile_photo_path',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'username' => 'string',
        'phone' => 'string',
        'profile_photo_path' => 'string',
        'password' => 'string',
        'two_factor_secret' => 'string',
        'two_factor_recovery_codes' => 'string',
        'remember_token' => 'string',
        'current_team_id' => 'integer',
        'email_verified_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'username' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:255',
        'profile_photo_path' => 'nullable|string|max:2048',
        'password' => 'nullable|string|max:255',
        'two_factor_secret' => 'nullable|string',
        'two_factor_recovery_codes' => 'nullable|string',
        'remember_token' => 'nullable|string|max:100',
        'current_team_id' => 'nullable',
        'email_verified_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function chatSends()
    {
        return $this->hasMany(\App\Models\Chat::class, 'user_send_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function chatReceives()
    {
        return $this->hasMany(\App\Models\Chat::class, 'user_receive_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function externalAuths()
    {
        return $this->hasMany(\App\Models\ExternalAuth::class, 'user_id');
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    **/
    public function myChatRooms()
    {
        return $this->hasMany(\App\Models\ChatRoom::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function chatRoomAssigneds()
    {
        return $this->belongsToMany(\App\Models\ChatRoom::class, 'chat_rooms_has_users');
    }
}
