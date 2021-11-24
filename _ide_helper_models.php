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
 * Class ExternalAuth
 *
 * @package App\Models
 * @version November 23, 2021, 3:36 pm CST
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
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $username
 * @property string|null $phone
 * @property string|null $profile_photo_path
 * @property string|null $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
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
 */
	class User extends \Eloquent {}
}

