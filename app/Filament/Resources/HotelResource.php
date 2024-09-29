<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelResource\Pages;
use App\Models\Hotel;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HotelResource extends Resource
{
    protected static ?string $model = Hotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Hotel Name')
                    ->columnSpanFull()
                    ->reactive(),
                Grid::make(3)
                    ->schema([

                        TextInput::make('country')
                            ->required()
                            ->maxLength(25)
                            ->label('Country')
                            ->reactive(),
                        TextInput::make('city')
                            ->required()
                            ->maxLength(100)
                            ->label('City')
                            ->reactive(),
                        TagsInput::make('attributes')
                            ->separator(',')
                            ->label('Attributes')
                            ->placeholder('New Attributes')
                            ->required(),
                    ]),
                Grid::make(2)
                    ->schema([
                        Textarea::make('summary')
                            ->required()
                            ->rows(3)
                            ->autosize()
                            ->maxLength(255),
                        Textarea::make('address')
                            ->required()
                            ->rows(3)
                            ->autosize()
                            ->maxLength(255),
                    ]),
                Grid::make(3)
                    ->schema([
                        Select::make('property_type')
                            ->label('Property Type')
                            ->options([
                                'Pensions' => 'Pensions',
                                'B&Bs & Inns' => 'B&Bs & Inns',
                                'Hotels' => 'Hotels',
                                'Resorts' => 'Resorts',
                                'All-inclusives' => 'All-inclusives',
                                'Specialty lodgings' => 'Specialty lodgings',
                                'Lodges' => 'Lodges',
                                'Villa' => 'Villa',
                                'Hostels' => 'Hostels',
                                'Condos' => 'Condos',
                                'Cottage' => 'Cottage',
                                'Campgrounds' => 'Campgrounds',
                                'Motels' => 'Motels',
                            ])
                            ->required()
                            ->searchable(),
                        Select::make('hotel_class')
                            ->label('Hotel Class')
                            ->options([
                                '5 Star' => '5 Star',
                                '4 Star' => '4 Star',
                                '3 Star' => '3 Star',
                                '2 Star' => '2 Star',
                            ])
                            ->required()
                            ->searchable(),
                        Select::make('hotel_style')
                            ->label('Hotel Style')
                            ->options([
                                'Budget' => 'Budget',
                                'Mid-range' => 'Mid-range',
                                'Luxury' => 'Luxury',
                                'Family-friend' => 'Family-friend',
                                'Business' => 'Business',
                                'Romantic' => 'Romantic',
                                'Modern' => 'Modern',
                            ])
                            ->required()
                            ->searchable(),
                    ]),
                Grid::make(2)
                    ->schema([
                        TextInput::make('affiliate_link')
                            ->required()
                            ->maxLength(25)
                            ->label('Affiliate Link')
                            ->reactive(),
                        FileUpload::make('images')
                            ->required()
                            ->directory('hotel')
                            ->multiple()
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png']),
                    ]),
                RichEditor::make(name: 'description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable()->label('Hotel Name'),
                TextColumn::make('country')->sortable()->searchable()->label('Country'),
                TextColumn::make('city')->sortable()->searchable()->label('City'),
                TextColumn::make('created_at')->label('Created At')->sortable()->dateTime('M d, Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListHotels::route('/'),
            'create' => Pages\CreateHotel::route('/create'),
            'edit' => Pages\EditHotel::route('/{record}/edit'),
        ];
    }
}
