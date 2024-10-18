<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                    ->schema([

                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->reactive() // Make the field reactive
                            ->afterStateUpdated(function ($state, callable $set, $get) {
                                // Only generate the slug if it's a new record (no existing record)
                                if (!$get('record')) {
                                    $set('slug', \Str::slug($state));
                                }
                            }),
                        TextInput::make('slug')
                            ->required()
                            ->disabled(fn($get) => $get('record') == ! null),
                        TextInput::make('meta_description')
                            ->required(),

                        TextInput::make('meta_keywords')
                            ->required(),
                    ]),

                Grid::make(3)
                    ->schema([
                        TextInput::make('seo_title')
                            ->maxLength(255),
                        Select::make('category_id')
                            ->label('Category') // Add a label
                            ->relationship('category', 'name') // Assuming you have a Category model with 'name' field
                            ->required(),

                        Select::make('status')
                            ->options([
                                'PUBLISHED' => 'Published',
                                'DRAFT' => 'Draft',
                                'PENDING' => 'Pending',
                            ])
                            ->default('DRAFT')
                            ->required(),

                    ]),
                Grid::make(1)
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('posts'),
                        Textarea::make('excerpt')
                            ->rows(6)
                            ->required(),
                        RichEditor::make('body')
                            ->required(),
                        Toggle::make('featured')
                            ->label('Featured'),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->limit(20)
                    ->searchable(),
                ImageColumn::make('image'),
                TextColumn::make('status')
                    ->sortable()
                    ->searchable(),
                IconColumn::make('featured')
                    ->label('Featured')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->sortable(),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
            'view' => Pages\ViewPost::route('/{record}'), // Optional
        ];
    }
}
