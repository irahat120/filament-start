<?php

namespace App\Filament\Resources\AboutUsResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\AboutUsResource;

class CreateAboutUs extends CreateRecord
{
    protected static string $resource = AboutUsResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('About Detils Created ')
            ->body('The About Detils has been created successfully.');
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
