<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name_category', 'description'];
    public $timestamps = false;
    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }
}
