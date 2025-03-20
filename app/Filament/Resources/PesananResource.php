<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesananResource\Pages;
use App\Filament\Resources\PesananResource\RelationManagers;
use App\Models\Pesanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PesananResource extends Resource
{
    protected static ?string $model = Pesanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Pesanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('kode_pesanan'),
                Forms\Components\TextInput::make('nama')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_masuk')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_selesai'),
                Forms\Components\Select::make('status_pesanan_id')
                    ->relationship('status_pesanan', 'nama')
                    ->required(),
                Forms\Components\Select::make('status_pembayaran_id')
                    ->relationship('status_pembayaran', 'nama')
                    ->required(),

                // repeater untuk detail pesanan
                Forms\Components\Repeater::make('detailPesanan')
                    ->relationship('detailPesanan')
                    ->schema([
                        Forms\Components\Select::make('layanan_id')
                            ->relationship('layanan', 'nama_layanan')
                            ->required()
                            ->live()
                            ->afterStateUpdated(function ($state, $set) {
                                $harga = \App\Models\Layanan::find($state)?->harga ?? 0;
                                $set('harga_per_kilo', $harga);
                            }),
                        Forms\Components\TextInput::make('jumlah_kilo')
                            ->numeric()
                            ->required()
                            ->live(),
                        Forms\Components\TextInput::make('harga_per_kilo')
                            ->numeric()
                            ->readOnly(),
                        Forms\Components\TextInput::make('subtotal')
                            ->numeric()
                            ->readOnly()
                    ])
                    ->columns(4)
                    ->afterStateUpdated(function($state, $set) {
                        foreach ($state as $key => $item) {
                            $jumlah_kilo = $item['jumlah_kilo'] ?? 0;
                            $harga_per_kilo = $item['harga_per_kilo'] ?? 0;
                            $subtotal = $jumlah_kilo * $harga_per_kilo;
                    
                            // Update subtotal di dalam repeater
                            $set("detailPesanan.$key.subtotal", $subtotal);
                        }
                    })
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_pesanan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_masuk')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_selesai')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('detailPesanan.subtotal')
                    ->label('Total Harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_pesanan.nama')
                    ->label('Status Pesanan')
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'menunggu' => 'gray',
                        'diproses' => 'warning',
                        'diambil' => 'success',
                        'selesai' => 'info',
                    }),
                Tables\Columns\TextColumn::make('status_pembayaran.nama')
                    ->label('Status Pembayaran')
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'belum lunas' => 'warning',
                        'lunas' => 'success',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPesanans::route('/'),
            'create' => Pages\CreatePesanan::route('/create'),
            'edit' => Pages\EditPesanan::route('/{record}/edit'),
        ];
    }
}
