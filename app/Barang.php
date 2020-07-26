<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
}
