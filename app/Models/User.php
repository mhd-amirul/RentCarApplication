<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeFilterUser($query, array $filterUsers)
    {
        # code...
        if (isset($filterUsers['searchUser']) ? $filterUsers['searchUser'] : false) {
            # code...
            return $query->where('username', 'LIKE', '%' . $filterUsers['searchUser'] . '%')
                        ->orWhere('email', 'LIKE', '%' . $filterUsers['searchUser'] . '%')
                        ->orWhere('no_hp', 'LIKE', '%' . $filterUsers['searchUser'] . '%')
                        ->orWhere('role', 'LIKE', '%' . $filterUsers['searchUser'] . '%')
                        ->orWhere('id', 'LIKE', '%' . $filterUsers['searchUser'] . '%')
                        ->orWhere('email', 'LIKE', '%' . $filterUsers['searchUser'] . '%');
        }
    }
}
