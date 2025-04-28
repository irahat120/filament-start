<?php

namespace App\Filament\Dashboard\Resources\BlogResource\Pages;

use App\Filament\Dashboard\Resources\BlogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;
}
