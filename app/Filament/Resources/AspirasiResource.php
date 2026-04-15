<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AspirasiResource\Pages;
use App\Models\Aspirasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AspirasiResource extends Resource
{
    protected static ?string $model = Aspirasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nis')->disabled(),
                Forms\Components\Select::make('status')
                    ->options([
                        'Menunggu' => 'Menunggu',
                        'Proses' => 'Proses',
                        'Selesai' => 'Selesai',
                    ])->required(),
                Forms\Components\Textarea::make('feedback')
                    ->placeholder('Berikan jawaban atau tanggapan...'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nis')
                    ->label('NIS')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori.ket_kategori') 
                    ->label('Kategori')
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi')
                    ->label('Lokasi'),
                Tables\Columns\TextColumn::make('status')
                    ->badge() 
                    ->color(fn (string $state): string => match ($state) {
                        'Menunggu' => 'gray',
                        'Proses' => 'warning',
                        'Selesai' => 'success',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAspirasis::route('/'),
            'create' => Pages\CreateAspirasi::route('/create'),
            'edit' => Pages\EditAspirasi::route('/{record}/edit'),
        ];
    }
}