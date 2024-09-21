<?php

namespace App\Filament\Resources\PostCatResource\Pages;

use App\Filament\Resources\PostCatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPostCats extends ListRecords
{
    protected static string $resource = PostCatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
