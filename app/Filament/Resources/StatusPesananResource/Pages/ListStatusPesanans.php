<?php

namespace App\Filament\Resources\StatusPesananResource\Pages;

use App\Filament\Resources\StatusPesananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatusPesanans extends ListRecords
{
    protected static string $resource = StatusPesananResource::class;
    protected static ?string $title = "Status Pesanan";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label("Tambah Status Pesanan"),
        ];
    }
}
