<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Class BlogCategory
 *
 * @package App\Models
 * @version January 23, 2022, 9:04 pm CST
 * @property string $name
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\BlogCategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|BlogCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BlogCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BlogCategory withoutTrashed()
 */
	class BlogCategory extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class BusinessConfiguration
 *
 * @package App\Models
 * @version January 23, 2022, 10:40 pm CST
 * @property string $key
 * @property string $value
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\BusinessConfigurationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessConfiguration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessConfiguration newQuery()
 * @method static \Illuminate\Database\Query\Builder|BusinessConfiguration onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessConfiguration query()
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessConfiguration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessConfiguration whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessConfiguration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessConfiguration whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessConfiguration whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessConfiguration whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|BusinessConfiguration withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BusinessConfiguration withoutTrashed()
 */
	class BusinessConfiguration extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class Chat
 *
 * @package App\Models
 * @version December 7, 2021, 12:26 pm CST
 * @property \App\Models\ChatRoom $chatRoom
 * @property \App\Models\User $userSend
 * @property \App\Models\User $userReceive
 * @property string $message
 * @property integer $user_send_id
 * @property integer $user_receive_id
 * @property integer $chat_room_id
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Chat|null $lastMessage
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\ChatFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newQuery()
 * @method static \Illuminate\Database\Query\Builder|Chat onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereChatRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereUserReceiveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereUserSendId($value)
 * @method static \Illuminate\Database\Query\Builder|Chat withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Chat withoutTrashed()
 */
	class Chat extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class ChatRoom
 *
 * @package App\Models
 * @version December 7, 2021, 12:23 pm CST
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $user1s
 * @property \Illuminate\Database\Eloquent\Collection $chats
 * @property string $name
 * @property integer $user_id
 * @property int $id
 * @property int $private
 * @property string|null $description
 * @property string|null $image_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read int|null $chats_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\User $userOwn
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\ChatRoomFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom newQuery()
 * @method static \Illuminate\Database\Query\Builder|ChatRoom onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom wherePrivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatRoom whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|ChatRoom withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ChatRoom withoutTrashed()
 */
	class ChatRoom extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class ExternalAuth
 *
 * @package App\Models
 * @version November 24, 2021, 2:09 pm CST
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property string $external_auth
 * @property string $external_id
 * @property string $external_email
 * @property string $external_avatar
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Database\Factories\ExternalAuthFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth newQuery()
 * @method static \Illuminate\Database\Query\Builder|ExternalAuth onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth whereExternalAuth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth whereExternalAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth whereExternalEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth whereExternalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExternalAuth whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|ExternalAuth withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ExternalAuth withoutTrashed()
 */
	class ExternalAuth extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Item
 *
 * @package App\Models
 * @version December 2, 2021, 1:09 am CST
 * @property \Illuminate\Database\Eloquent\Collection $menus
 * @property string $name
 * @property string $description
 * @property string $route
 * @property string $icon
 * @property integer $item_id
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Item[] $childs
 * @property-read int|null $childs_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read int|null $menus_count
 * @property-read Item|null $parent
 * @method static \Database\Factories\ItemFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item newQuery()
 * @method static \Illuminate\Database\Query\Builder|Item onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Item withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Item withoutTrashed()
 */
	class Item extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class Menu
 *
 * @package App\Models
 * @version December 2, 2021, 1:05 am CST
 * @property \Illuminate\Database\Eloquent\Collection $items
 * @property string $name
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read int|null $items_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\MenuFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newQuery()
 * @method static \Illuminate\Database\Query\Builder|Menu onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Menu withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Menu withoutTrashed()
 */
	class Menu extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * Class User
 *
 * @package App\Models
 * @version November 24, 2021, 12:33 pm CST
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
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read int|null $chat_receives_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChatRoom[] $chatRooms
 * @property-read int|null $chat_rooms_count
 * @property-read int|null $chat_sends_count
 * @property-read int|null $external_auths_count
 * @property-read string $profile_photo_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read int|null $my_chat_rooms_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

