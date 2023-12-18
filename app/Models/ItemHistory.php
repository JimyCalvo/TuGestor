<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemHistory extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'item_history';

    protected $fillable = [
        'item_id', 'responsible_id', 'custody_id', 'created_at'
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
}
