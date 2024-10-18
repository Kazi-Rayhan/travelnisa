<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomTypeResource\Pages;
use App\Models\RoomType;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RoomTypeResource extends Resource
{
    protected static ?string $model = RoomType::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Room Type')
                                    ->reactive(),

                                TextInput::make('price_per_night')
                                    ->required()
                                    ->numeric()
                                    ->label('Price Per Night')
                                    ->reactive(),

                                TextInput::make('max_occupancy')
                                    ->required()
                                    ->numeric()
                                    ->label('Max Occupancy')
                                    ->reactive(),

                                RichEditor::make(name: 'description')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columns(2)
                    ->columnSpan(2),
                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                Select::make('hotel_id')
                                    ->relationship(name: 'hotel', titleAttribute: 'name')
                                    ->label('Hotel Name')
                                    ->required(),

                                TagsInput::make('amenities')
                                    ->separator(',')
                                    ->label('Amenities')
                                    ->placeholder('New Amenities')
                                    ->required(),

                                FileUpload::make('images')
                                    ->required()
                                    ->directory('room_type')
                                    ->multiple()
                                    ->visibility('public')
                                    ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png'])
                                    ->columnSpanFull(),
                            ])
                    ])
                    ->columnSpan(1),






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
                TextColumn::make('created_at')->label('Created At')->sortable()->dateTime('M d, Y'),
                TextColumn::make('hotel.name')->sortable()->searchable()->label('Hotel Name'),
                TextColumn::make('name')->sortable()->searchable()->label('Room Type Name'),
                TextColumn::make('price_per_night')->sortable()->searchable()->label('Price Per Night'),
                TextColumn::make('max_occupancy')->sortable()->searchable()->label('Max Occupancy'),
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
            'index' => Pages\ListRoomTypes::route('/'),
            'create' => Pages\CreateRoomType::route('/create'),
            'edit' => Pages\EditRoomType::route('/{record}/edit'),
        ];
    }
}
