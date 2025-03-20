<?php

namespace App\Filament\Resources\PesananResource\Widgets;

use Carbon\Carbon;
use App\Models\Pesanan;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class PesananBulananStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Statistik Bulanan
            Card::make('Pesanan Bulan Ini', Pesanan::whereMonth('created_at', Carbon::now()->month)->count())
                ->description('Jumlah pesanan bulan ini')
                ->icon('heroicon-o-calendar')
                ->color('gray'),

            Card::make('Pendapatan Bulan Ini', 'Rp ' . number_format(Pesanan::whereMonth('created_at', Carbon::now()->month)
                    ->withSum('detailPesanan', 'subtotal')
                    ->get()
                    ->sum('detail_pesanan_sum_subtotal')
                ))
                ->description('Total pendapatan bulan ini')
                ->icon('heroicon-o-banknotes')
                ->color('purple'),
        ];
    }
}
