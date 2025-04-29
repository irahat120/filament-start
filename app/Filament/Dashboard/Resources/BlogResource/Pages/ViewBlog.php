<?php

namespace App\Filament\Dashboard\Resources\BlogResource\Pages;

use Filament\Actions;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\TextEntry;
use App\Filament\Dashboard\Resources\BlogResource;
use Filament\Support\Enums\FontFamily;
use Filament\Support\Enums\FontWeight;

class ViewBlog extends ViewRecord
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
    public function infolist(Infolist $infolist): Infolist
{
    return $infolist
        ->schema([
            TextEntry::make('title')->columnSpan(2)->weight(FontWeight::Bold)->fontFamily(FontFamily::Mono),
            TextEntry::make('description')->html()
        ]);
}
}
