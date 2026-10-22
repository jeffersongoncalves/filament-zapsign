<?php

namespace JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource\Pages;

use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource;
use JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource\DocumentActions;

class ListDocuments extends ListRecords
{
    protected static string $resource = DocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DocumentActions::send(),
        ];
    }
}
