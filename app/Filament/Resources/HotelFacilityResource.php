<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelFacilityResource\Pages;
use App\Filament\Resources\HotelFacilityResource\RelationManagers;
use App\Models\HotelFacility;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Grid;


class HotelFacilityResource extends Resource
{
    protected static ?string $model = HotelFacility::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                    ->schema([

                        TextInput::make('heading')
                            ->required()
                            ->maxLength(255)
                            ->label('Heading'),
                        TextInput::make('icon')
                            ->required()
                            ->maxLength(255)
                            ->label('Icon'),

                    ]),
                Textarea::make('description')
                    ->columnSpanFull()
                    ->rows(6)
                    ->label('Description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('heading')
                    ->sortable()
                    ->searchable()
                    ->label('Heading'),
                    TextColumn::make('description')
                    ->limit(100)
                    ->label('Description'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListHotelFacilities::route('/'),
            'create' => Pages\CreateHotelFacility::route('/create'),
            'edit' => Pages\EditHotelFacility::route('/{record}/edit'),
        ];
    }
}
