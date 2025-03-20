<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    protected $guarded = ['id'];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}
