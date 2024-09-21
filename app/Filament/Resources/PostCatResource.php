<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostCatResource\Pages;
use App\Filament\Resources\PostCatResource\RelationManagers;
use App\Models\PostCat;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostCatResource extends Resource
{
    protected static ?string $model = PostCat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Category Name')
                    ->reactive() // Make the field reactive
                    ->afterStateUpdated(function ($state, callable $set, $get) {
                        // Only generate the slug if it's a new record (no existing record)
                        if (!$get('record')) {
                            $set('slug', \Str::slug($state));
                        }
                    }),
    
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->label('Category Slug')
                    // Disable the slug field if editing (i.e., a record exists)
                    ->disabled(fn($get) => $get('record') ==! null),
            ]);
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable()->label('Category Name'),
                TextColumn::make('slug')->sortable()->searchable()->label('Category Slug'),
                TextColumn::make('created_at')->label('Created At')->sortable(),
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
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPostCats::route('/'),
            'create' => Pages\CreatePostCat::route('/create'),
            'edit' => Pages\EditPostCat::route('/{record}/edit'),
            'view' => Pages\ViewPostCat::route('/{record}'), // Optional view page
        ];
    }
}
