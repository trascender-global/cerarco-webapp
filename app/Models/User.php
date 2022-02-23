<?php

namespace App\Models;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'email_verified_at'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeNoSuperAdmin($query)
    {
        return $query->where('role_id', '!=', 1);
    }

    /**
     * @return HasMany
     */
    public function fichas(): HasMany
    {
        return $this->hasMany(Ficha::class);
    }

    /**
     * @return HasMany
     */
    public function modelos(): HasMany
    {
        return $this->hasMany(Modelo::class);
    }

    /**
     * @return HasMany
     */
    public function contenidos(): HasMany
    {
        return $this->hasMany(Contenido::class);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        // return parent::sendPasswordResetNotification($token);
        $this->notify(new ResetPasswordNotification($token));
    }
}
