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
     * App\Models\Permission.
     *
     * @mixin IdeHelperPermission
     *
     * @property int                             $id
     * @property string                          $name
     * @property string                          $guard_name
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|Permission[] $permissions
     * @property-read int|null $permissions_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
     * @property-read int|null $roles_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
     * @property-read int|null $users_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Permission permission($permissions)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
     * @method static \Illuminate\Database\Eloquent\Builder|Permission role($roles, $guard = null)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission whereGuardName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
     */
    class IdeHelperPermission extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Role.
     *
     * @mixin IdeHelperRole
     *
     * @property int                             $id
     * @property string                          $name
     * @property string                          $guard_name
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
     * @property-read int|null $permissions_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
     * @property-read int|null $users_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
     * @method static \Illuminate\Database\Eloquent\Builder|Role query()
     * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
     */
    class IdeHelperRole extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * App\Models\User.
     *
     * @mixin IdeHelperUser
     *
     * @property int                             $id
     * @property string                          $name
     * @property string                          $email
     * @property \Illuminate\Support\Carbon|null $email_verified_at
     * @property string                          $password
     * @property int                             $status
     * @property string|null                     $remember_token
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
     * @property-read int|null $notifications_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
     * @property-read int|null $permissions_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
     * @property-read int|null $roles_count
     *
     * @method static \Database\Factories\UserFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
     * @method static \Illuminate\Database\Eloquent\Builder|User query()
     * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
     */
    class IdeHelperUser extends \Eloquent
    {
    }
}
