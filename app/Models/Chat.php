<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class Chat
 * @package App\Models
 * @version December 7, 2021, 12:26 pm CST
 *
 * @property \App\Models\ChatRoom $chatRoom
 * @property \App\Models\User $userSend
 * @property \App\Models\User $userReceive
 * @property string $message
 * @property integer $user_send_id
 * @property integer $user_receive_id
 * @property integer $chat_room_id
 */
class Chat extends Model implements HasMedia
{
    use InteractsWithMedia;
    use SoftDeletes;

    use HasFactory;

    public $table = 'chats';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'message',
        'user_send_id',
        'user_receive_id',
        'chat_room_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'message' => 'string',
        'user_send_id' => 'integer',
        'user_receive_id' => 'integer',
        'chat_room_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'message' => 'required|string|max:1000',
        'user_send_id' => 'required|integer',
        'user_receive_id' => 'nullable|integer',
        'chat_room_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function chatRoom()
    {
        return $this->belongsTo(\App\Models\ChatRoom::class, 'chat_room_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function userSend()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_send_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function userReceive()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_receive_id');
    }
    public function lastMessage()
    {
        return $this->hasOne(Chat::class, 'user_send_id', 'user_receive_id')
                ->orWhere('user_send_id', 'user_receive_id');
    }
}
