<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventory;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_supplier', 'contact_name', 'phone_supplier',
        'tel_supplier', 'address_supplier'
    ];
    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }
}
