<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = "goods";
    public $primarikey = "id";
    public $timestamp = true;

    protected $fillable = [
        'name', 'barcode', 'purchase', 'selling', 'stock', 'image',
    ];

    public static function convertToRupiah($angka){
        return 'Rp. ' . strrev(implode('.',str_split(strrev(strval($angka)),3)));
    }

    public static function deconvertFromRupiah($angka){
        return intval(preg_replace("/,.*|[^0-9]/", '', $angka));
    }
}
