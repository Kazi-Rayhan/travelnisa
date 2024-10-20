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
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([

                        TextInput::make(name: 'page_title')
                            ->required()
                            ->label('Page Title')
                            ->columnSpanFull()
                            ->maxLength(455),
                        RichEditor::make(name: 'description')
                            ->required()
                            ->columnSpanFull(),

                    ])
                    ->columnSpan(2)
                    ->columns(2),
                Group::make()
                    ->schema([
                        Section::make()
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
                                FileUpload::make('images')
                                    ->directory('pages')
                                    ->visibility('public')
                                    ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png']),
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
                TextColumn::make('display_name')->sortable()->searchable()->label('Display Name'),
                TextColumn::make('key')->sortable()->searchable()->label('Key'),
                TextColumn::make('page_title')->sortable()->searchable()->label('Page Title')->limit(50),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
