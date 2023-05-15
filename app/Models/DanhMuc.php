<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class DanhMuc extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'name',
        'img',
        
    ];
}
