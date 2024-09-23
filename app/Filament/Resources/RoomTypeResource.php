<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomTypeResource\Pages;
use App\Models\RoomType;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
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
                Select::make('hotel_id')
                    ->relationship(name: 'hotel', titleAttribute: 'name')
                    ->label('Hotel Name')
                    ->required(),

                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Room Type')
                    ->reactive(),
                RichEditor::make(name: 'description')
                    ->required()->columnSpanFull(),
                Grid::make(3)
                    ->schema([
                        TextInput::make('price_per_night')
                            ->required()
                            ->numeric()
                            ->label('Price Per Night')
                            ->reactive()
                            ->columnSpan(1),

                        TextInput::make('max_occupancy')
                            ->required()
                            ->numeric()
                            ->label('Max Occupancy')
                            ->reactive()
                            ->columnSpan(1),
                        TagsInput::make('amenities')
                            ->separator(',')
                            ->label('Amenities')
                            ->placeholder('New Amenities')
                            ->required()
                            ->columnSpan(1),
                    ]),
                FileUpload::make('images')
                    ->required()
                    ->directory('room_type')
                    ->multiple()
                    ->visibility('public')
                    ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png'])
                    ->columnSpanFull(),
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
