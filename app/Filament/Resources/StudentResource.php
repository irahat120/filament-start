<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Categories;
use App\Models\Student;
use Faker\Core\Color;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Hidden;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')->default(fn() => auth()->id()),
                Section::make('Information')
                    ->collapsed(false)
                    ->schema([
                        TextInput::make('name'),
                        TextInput::make('email')->email(),

                        Select::make('categories_id')
                            ->relationship('Categories','name')
                            ->label('Catagories'),
                        ColorPicker::make('color'),
                        RichEditor::make('content')->columnSpan(2),
                    ])
                    ->columnSpan(3),

                Section::make('Profile')
                    ->schema([
                        FileUpload::make('images')->disk('public')->directory('images'), 
                        TagsInput::make('hobbys'), 
                        Checkbox::make('published')])
                        ->columnSpan(2),
            ])
            ->columns(5);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn(Builder $query) => $query->where('user_id', auth()->user()->id))
            ->columns([
                TextColumn::make('index')->sortable()->searchable()->toggleable()->label('SL')->rowIndex(),

                // TextColumn::make('user_id'),
                TextColumn::make('name')->sortable()->searchable()->toggleable(),
                TextColumn::make('email')->sortable()->searchable()->toggleable(),
                TextColumn::make('Categories.name')->sortable()->searchable()->toggleable(),
                ColorColumn::make('color')->sortable()->searchable()->toggleable(),
                ImageColumn::make('images'),
                TextColumn::make('hobbys')->label('Hobby')->sortable()->searchable()->toggleable(),
                CheckboxColumn::make('published')->sortable()->searchable()->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\ViewAction::make(), Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getRelations(): array
    {
        return [
                //
            ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'view' => Pages\ViewStudent::route('/{record}'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
