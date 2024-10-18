<?php

namespace App\Filament\Resources\HotelResource\Pages;

use App\Filament\Resources\HotelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHotel extends CreateRecord
{
    protected static string $resource = HotelResource::class;
    protected function afterCreate(): void
    {

        $facilityIds = $this->record->facilities;
        
        if (!empty($facilityIds)) {
            $this->record->facilities()->attach($facilityIds);
        }
    }
}
