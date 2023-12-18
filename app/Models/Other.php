<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'model', 'version', 'dimension', 'weight', 'date_exp',
        'color', 'extra_1', 'extra_2', 'extra_3', 'extra_4',
        'extra_5', 'extra_6', 'extra_7', 'extra_8', 'extra_9',
        'items_list_id'
    ];

    // Relación con ItemsList (si es necesario)
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
