<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     public static function getAll()
    {
        $customer = DB::table('customers')->get();
        return $customer;
    }
}
