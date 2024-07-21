<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Resources\Resource;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {   
        $ng = Country::where('country_code', 'NG')->withCount('employees')->first();
        $gh = Country::where('country_code', 'GH')->withCount('employees')->first();        
        return [
            Card::make('All Employees', Employee::all()->count()),
            Card::make($ng->name. ' Employees', $ng->employees_count),
            Card::make($gh->name. ' Employees', $gh->employees_count),
            
            
               
        ];
    }
}
