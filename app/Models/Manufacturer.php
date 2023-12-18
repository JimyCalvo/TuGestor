<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventory;
class Manufacturer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];
    public $timestamps = false;

    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }


}
