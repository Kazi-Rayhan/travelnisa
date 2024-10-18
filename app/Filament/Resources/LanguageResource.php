<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LanguageResource\Pages;
use App\Filament\Resources\LanguageResource\RelationManagers;
use App\Models\Language;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

// class LanguageResource extends Resource
// {
//     protected static ?string $model = Language::class;

//     protected static ?string $navigationIcon = 'heroicon-o-globe-alt';


//     public static function form(Form $form): Form
//     {
//         return $form
//             ->schema([
//                 Section::make()
//                     ->schema([
//                         Grid::make(3)
//                             ->schema([
//                                 TextInput::make('key')
//                                     ->required()
//                                     ->unique(Language::class, 'key')
//                                     ->label('Language Key'),
//                                 TextInput::make('english')
//                                     ->required()
//                                     ->label('English Translation'),
//                                 TextInput::make('danish')
//                                     ->required()
//                                     ->label('Danish Translation'),
//                             ])
//                     ]),
//             ]);
//     }

//     public static function table(Table $table): Table
//     {
//         return $table
//             ->columns([
//                 TextColumn::make('key')
//                     ->sortable()
//                     ->searchable()
//                     ->label('Key'),
//                 TextColumn::make('english')
//                     ->sortable()
//                     ->searchable()
//                     ->label('English'),
//                 TextColumn::make('danish')
//                     ->sortable()
//                     ->searchable()
//                     ->label('Danish'),
//             ])
//             ->filters([
//                 //
//             ])
//             ->actions([
//                 Tables\Actions\EditAction::make(),
//             ])
//             ->bulkActions([
//                 Tables\Actions\BulkActionGroup::make([
//                     Tables\Actions\DeleteBulkAction::make(),
//                 ]),
//             ]);
//     }

//     public static function getRelations(): array
//     {
//         return [
//             //
//         ];
//     }

//     public static function getPages(): array
//     {
//         return [
//             'index' => Pages\ListLanguages::route('/'),
//             'create' => Pages\CreateLanguage::route('/create'),
//             'edit' => Pages\EditLanguage::route('/{record}/edit'),
//         ];
//     }
// }
