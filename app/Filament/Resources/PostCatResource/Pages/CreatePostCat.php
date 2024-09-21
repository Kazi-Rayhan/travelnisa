<?php

namespace App\Filament\Resources\PostCatResource\Pages;

use App\Filament\Resources\PostCatResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePostCat extends CreateRecord
{
    protected static string $resource = PostCatResource::class;
}
