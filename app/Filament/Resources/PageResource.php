<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Page;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PageResource\RelationManagers;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                ->schema([

                    TextInput::make('display_name')
                        ->required()
                        ->label('Display Name')
                        ->maxLength(255),

                    TextInput::make('key')
                        ->required()
                        ->maxLength(20)
                        ->disabledOn('edit')
                        ->unique(ignorable: fn($record) => $record),
                ]),
                TextInput::make(name: 'page_title')
                ->required()
                ->label('Page Title')
                ->maxLength(255),
                FileUpload::make('images')
                ->directory('pages')
                ->multiple()
                ->maxFiles(2)
                ->visibility('public')
                ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png']),
                RichEditor::make(name: 'description')
                ->required()->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('display_name')->sortable()->searchable()->label('Display Name'),
                TextColumn::make('key')->sortable()->searchable()->label('Key'),
                TextColumn::make('page_title')->sortable()->searchable()->label('Page Title')->limit(50),
            ])
            ->filters([
                //
            ])
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
