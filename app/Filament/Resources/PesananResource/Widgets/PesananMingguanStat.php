<?php

namespace App\Filament\Resources\PesananResource\Widgets;

use Carbon\Carbon;
use App\Models\Pesanan;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class PesananMingguanStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Statistik Mingguan
            Card::make('Pesanan Minggu Ini', Pesanan::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count())
                ->description('Jumlah pesanan dalam 7 hari terakhir')
                ->icon('heroicon-o-calendar')
                ->color('warning'),

            Card::make('Pendapatan Minggu Ini', 'Rp ' . number_format(Pesanan::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->withSum('detailPesanan', 'subtotal')->get()->sum('detail_pesanan_sum_subtotal')))
                ->description('Total pendapatan dalam seminggu terakhir')
                ->icon('heroicon-o-banknotes')
                ->color('info'),
        ];
    }
}
