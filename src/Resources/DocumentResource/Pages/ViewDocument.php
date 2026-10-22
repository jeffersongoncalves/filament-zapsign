<?php

namespace JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource;
use JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource\DocumentActions;

class ViewDocument extends ViewRecord
{
    protected static string $resource = DocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DocumentActions::download(),
            DocumentActions::sync(),
            DocumentActions::cancel(),
            DocumentActions::delete(),
        ];
    }
}
