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
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;

class HotelFacilityResource extends Resource
{
    protected static ?string $model = HotelFacility::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('heading')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->label('Heading'),


                        Textarea::make('description')
                            ->columnSpanFull()
                            ->rows(3)
                            ->label('Description'),

                    ])
                    ->columnSpan(2)
                    ->columns(2),
                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                FileUpload::make('image')
                                    ->required()
                                    ->directory('Hotel Facility')
                                    ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png', 'image/svg+xml'])
                                    ->label('Icon'),
                                // Toggle::make('status')
                                //     ->onIcon('heroicon-o-bolt')
                                //     ->offIcon('heroicon-o-building-library')
                                //     ->onColor('success')
                                //     ->offColor('danger')
                                //     ->columnSpan('full')
                                //     ->label('Active'),
                            ])
                            ->columnSpan(1)
                    ]),
            ])->columns([
                'default' => 3,
                'sm' => 3,
                'md' => 3,
                'lg' => 3,
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
