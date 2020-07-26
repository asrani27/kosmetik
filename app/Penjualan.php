<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';

    public function penjualan_detail()
    {
        return $this->hasMany(Penjualan_detail::class, 'penjualan_id');
    }

    public function kustomer()
    {
        return $this->belongsTo(Kustomer::class, 'kustomer_id');
    }
}
