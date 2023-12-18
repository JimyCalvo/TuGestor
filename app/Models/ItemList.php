<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manufacturer;
use App\Models\Supplier;
use App\Models\Category;

class ItemList extends Model
{
    use HasFactory;
    protected $table = 'items_list';
    public $timestamps = false;

    protected $fillable = [
        'name_item', 'quantity', 'value', 'description',
        'category_id', 'manufacturer_id', 'supplier_id', 'inventory_id'
    ];
    // ------------------------- Manufacturer -------------------------
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class,'manufacturer_id');
    }
    // ------------------------- Supplier -------------------------
    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplier_id');
    }
    // ------------------------- Category -------------------------
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
     // ------------------------- Inventory -------------------------
     public function inventory()
     {
         return $this->belongsTo(Inventory::class);
     }



}
