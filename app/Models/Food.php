<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;


class Food extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'price',
        'qty',
        'type_id',
        'description',
        'create_at',
    ];
}
