<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Area;

class Profile extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'dni', 'user_id', 'phone_user', 'tel_user', 'address',
        'birthday', 'gender', 'job_title', 'tel_job'
    ];
    ////////////////////////////////////////////////////////////////
    // -------------------------- User --------------------------------
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // -------------------------- User --------------------------------

    public function areas()
    {
        return $this->belongsToMany(Area::class);
    }


}
