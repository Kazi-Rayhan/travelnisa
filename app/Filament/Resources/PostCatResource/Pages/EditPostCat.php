<?php

namespace App\Filament\Resources\PostCatResource\Pages;

use App\Filament\Resources\PostCatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPostCat extends EditRecord
{
    protected static string $resource = PostCatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
