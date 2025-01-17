<?php

namespace App\Filament\Resources\KontenResource\Pages;

use App\Filament\Resources\KontenResource;
use App\Filament\Resources\KontenResource\Widgets\KontenWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKontens extends ListRecords
{
    protected static string $resource = KontenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            KontenWidget::class
        ];
    }
}
