<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraTitle extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'extra_title';
    protected $fillable = [
        'extra_name',
        'type',
        'title',
    ];
}
