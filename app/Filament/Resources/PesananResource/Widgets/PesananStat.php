<?php

namespace App\Filament\Resources\PesananResource\Widgets;

use Carbon\Carbon;
use App\Models\Pesanan;
use Filament\Infolists\Components\Section;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class PesananStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // statistik harian
            Card::make('Pesanan Hari Ini', Pesanan::whereDate('created_at', Carbon::today())->count())
                ->description('Jumlah pesanan yang masuk hari ini')
                ->icon('heroicon-o-calendar')
                ->color('primary'),

            Card::make('Pendapatan Hari Ini', 'Rp ' . number_format(
                    Pesanan::whereDate('created_at', Carbon::today())
                        ->withSum('detailPesanan', 'subtotal') // Menjumlahkan subtotal dari relasi
                        ->get()
                        ->sum('detail_pesanan_sum_subtotal') // Mengambil hasil penjumlahan
                ))                
                ->description('Total pendapatan dari pesanan hari ini')
                ->icon('heroicon-o-banknotes')
                ->color('success'),
        ];
    }
}
