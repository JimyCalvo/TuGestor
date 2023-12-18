<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryExit extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id', 'responsible_id', 'custody_id', 'reason'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function responsible()
    {
        return $this->belongsTo(User::class, 'responsible_id');
    }

    public function custody()
    {
        return $this->belongsTo(User::class, 'custody_id');
    }

    // No timestamps
    public $timestamps = false;
}
