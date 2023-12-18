<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'status', 'comment', 'custody_id', 'item_list_id'
    ];

    
    public function custody()
    {
        return $this->belongsTo(User::class, 'custody_id');
    }

    public function itemList()
    {
        return $this->belongsTo(ItemList::class, 'item_list_id');
    }
}
