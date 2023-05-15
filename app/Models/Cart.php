<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'id',
        'count',
        'total',
    ];
}
