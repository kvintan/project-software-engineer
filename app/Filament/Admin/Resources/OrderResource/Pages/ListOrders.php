<?php

namespace App\Filament\Admin\Resources\OrderResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Admin\Resources\OrderResource;
use App\Filament\Admin\Resources\OrderResource\Widgets\OrderStats;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array {
        return [
            OrderStats::class
        ];
    }
}
