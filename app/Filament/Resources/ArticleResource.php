<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\CheckboxColumn;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleResource\RelationManagers;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TagsInput;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check'; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Information')->schema([
                    TextInput::make('title'),
                    Select::make('categories_id')
                        ->relationship('Categories','name')
                        ->label('Catagories'),
                    TextInput::make('author'),
                    RichEditor::make('content')->columnSpan(2),
                ])->columnSpan(3),
                section::make('Uploads')->schema([
                    FileUpload::make('image')->disk('public')->directory('images'),
                    TagsInput::make('tags'),
                    Checkbox::make('status'),
                ])->columnSpan(2),
   
            ])->columns(5);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('title')->limit(30),
                TextColumn::make('author'),
                TextColumn::make('categories.name'),
                TextColumn::make('created_at')->datetime('d M y')->label('Created'),
                CheckboxColumn::make('status'),
                
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'view' => Pages\ViewArticle::route('/{record}'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
