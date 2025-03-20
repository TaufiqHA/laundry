<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $guarded = ['id'];

    protected static function boot() {
        parent::boot();
        static::creating(function($model) {
            if (!$model->kode_pesanan) {
                $model->kode_pesanan = (string) Str::uuid();
            }
        });
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
