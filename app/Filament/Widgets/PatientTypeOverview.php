<?php

namespace App\Filament\Widgets;

use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Cats', Patient::whereType('cat')->count()),
            Stat::make('Dogs', Patient::whereType('dog')->count()),
            Stat::make('Rabbits', Patient::whereType('rabbit')->count()),
        ];
    }
}
