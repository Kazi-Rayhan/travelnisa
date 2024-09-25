<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Hotel;
use App\Models\Slider;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Slider', Slider::count()),
            Stat::make('Post', Post::count()),
            Stat::make('Hotel', Hotel::count()),
        ];
    }
}
