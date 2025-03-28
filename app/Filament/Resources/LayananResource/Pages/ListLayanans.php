<?php

namespace App\Filament\Resources\LayananResource\Pages;

use App\Filament\Resources\LayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLayanans extends ListRecords
{
    protected static string $resource = LayananResource::class;
    protected static ?string $title = 'Layanan';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Layanan'),
        ];
    }
}
