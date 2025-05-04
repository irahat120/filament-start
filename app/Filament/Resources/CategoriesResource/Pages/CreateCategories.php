<?php

namespace App\Filament\Resources\CategoriesResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\CategoriesResource;

class CreateCategories extends CreateRecord
{
    protected static string $resource = CategoriesResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Categories Created ')
            ->body('The Categories has been created successfully.');
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
