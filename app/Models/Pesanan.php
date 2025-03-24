<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $guarded = ['id'];

    public function detailPesanan()
    {
        return $this->hasMany(DetailPesanan::class);
    }

    public function status_pesanan()
    {
        return $this->belongsTo(StatusPesanan::class);
    }

    public function status_pembayaran()
    {
        return $this->belongsTo(StatusPembayaran::class);
    }
}
