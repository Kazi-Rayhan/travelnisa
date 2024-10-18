<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('display_name')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('key')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignorable: fn($record) => $record),
                                Textarea::make('value')
                                    ->columnSpanFull()
                                    ->rows(3)
                                    ->maxLength(65535),
                            ])
                    ])
                    ->columnSpan(2)
                    ->columns(2),
                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                Select::make('type')
                                    ->options([
                                        'text' => 'Text',
                                        'image' => 'Image',
                                    ])
                                    ->default('text')
                                    ->required(),
                                FileUpload::make('image')
                                    ->directory('setting')
                                    ->visibility('public')
                                    ->columnSpanFull()
                                    ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png']),
                            ])
                            ->columnSpan(1),
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
                TextColumn::make('display_name')->sortable()->searchable(),
                TextColumn::make('key')->sortable()->searchable(),
                TextColumn::make('type')->sortable(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->sortable()
                    ->dateTime('M d, Y'),

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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
