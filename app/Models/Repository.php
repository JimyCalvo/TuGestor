<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity', 'repository_cost', 'area_id', 'guardian_id'
    ];
     //------------------------- area-------------------------
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    //------------------------- guardian-------------------------
    public function guardian()
    {
        return $this->belongsTo(User::class);
    }
    //------------------------- inventory-------------------------
    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'repository_id');
    }
}
