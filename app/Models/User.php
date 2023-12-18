<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Profile;
use App\Models\Role;
use App\Models\Repository;
use App\Models\Inventory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'name',
        'last_name',
        'role_id',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    ////////////////////////////////////////////////////////////////
    // ------------------------- Roles -------------------------
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    //------------------------- Profiles-------------------------
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    //------------------------- Repositories-------------------------
    public function repositories()
    {
        return $this->hasMany(Repository::class, 'guardian_id');
    }
    //------------------------- inventory-------------------------
    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'responsible_id');
    }
}
