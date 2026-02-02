<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public static function getDataproduk(){
        $dataproduk = [
            [
                'kodeproduk' => 'P001',
                'namaproduk' => 'Bang-bang',
            ],
            [
                'kodeproduk' => 'P002',
                'namaproduk' => 'Citato Inoen'
            ],
        ];
        return $dataproduk;
    }
}
