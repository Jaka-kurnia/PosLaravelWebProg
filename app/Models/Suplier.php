<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $fillable = [
        'suplier_code',
        'suplier_name',
        'address',
        'phone'
    ];
    
}
