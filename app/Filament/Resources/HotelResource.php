<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Hotel;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\HotelResource\Pages;

class HotelResource extends Resource
{
    protected static ?string $model = Hotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Hotel Name')
                    ->reactive(),
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
                FileUpload::make('images')
                    ->required()
                    ->directory('hotel')
                    ->multiple()
                    ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png'])
                    ->maxSize(4096),
                Textarea::make('summary')
                    ->required()
                    ->rows(3)
                    ->autosize()
                    ->maxLength(255),
                RichEditor::make(name: 'description')
                    ->required(),
                    TagsInput::make('attributes')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')->label('Created At')->sortable()->dateTime('M d, Y'),
                TextColumn::make('name')->sortable()->searchable()->label('Hotel Name'),
                TextColumn::make('country')->sortable()->searchable()->label('Country'),
                TextColumn::make('city')->sortable()->searchable()->label('City'),
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
