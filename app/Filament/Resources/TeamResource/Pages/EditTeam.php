<?php

namespace App\Filament\Resources\TeamResource\Pages;

use Filament\Actions;
use App\Filament\Resources\TeamResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditTeam extends EditRecord
{
    protected static string $resource = TeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Member updated')
            ->body('The Member has been saved successfully.');
    }
}
