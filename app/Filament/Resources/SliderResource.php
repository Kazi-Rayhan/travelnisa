<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Filament\Resources\SliderResource\RelationManagers;
use App\Models\Slider;
use Filament\Forms\Components\{FileUpload, Group, Grid, Section, TextInput, Toggle,};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('heading')
                                    ->required()
                                    ->maxLength(255),

                                Toggle::make('status')
                                    ->columnSpan('full')
                                    ->label('Active'),
                            ])
                    ])
                    ->columnSpan(2)
                    ->columns(2),
                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                FileUpload::make('image')
                                    ->image()
                                    ->directory('sliders')
                                    ->columnSpanFull()
                                    ->required(),
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
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image')
                    ->label('Slider Image'),
                TextColumn::make('heading')
                    ->sortable()
                    ->searchable(),

            ])
            ->filters([
                // Optionally add filters here
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),   
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
            // Define any relationships here if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
            'view' => Pages\ViewSlider::route('/{record}/vew'), // Adding view page for individual records
        ];
    }
}
