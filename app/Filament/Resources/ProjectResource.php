<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Projeler';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Proje Detayları')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Başlık')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $state, Forms\Set $set) => $set('slug', Str::slug($state))),

                        Forms\Components\TextInput::make('slug')
                            ->label('URL')
                            ->required()
                            ->unique(ignoreRecord: true),

                        Forms\Components\Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'Konut' => 'Konut',
                                'Ticari' => 'Ticari',
                                'Endüstriyel' => 'Endüstriyel',
                                'Karma' => 'Karma Kullanım',
                            ])
                            ->required(),

                        Forms\Components\TextInput::make('short_description')
                            ->label('Kısa Açıklama')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\RichEditor::make('description')
                            ->label('Detaylı Açıklama')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Proje Bilgileri')
                    ->schema([
                        Forms\Components\TextInput::make('client')
                            ->label('Müşteri'),

                        Forms\Components\DatePicker::make('project_date')
                            ->label('Proje Tarihi')
                            ->required(),

                        Forms\Components\TextInput::make('location')
                            ->label('Konum')
                            ->required(),

                        Forms\Components\TextInput::make('area')
                            ->label('Alan')
                            ->suffix('m²'),

                        Forms\Components\TextInput::make('website')
                            ->label('Website')
                            ->url(),
                    ]),

                Forms\Components\Section::make('Proje Görselleri')
                    ->schema([
                        Forms\Components\FileUpload::make('images')
                            ->label('Görseller')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->directory('assets/img/gallery')
                            ->visibility('public')
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('16:9')
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('1080')
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Durum')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true),

                        Forms\Components\TextInput::make('order')
                            ->label('Sıralama')
                            ->numeric()
                            ->default(0),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('images')
                    ->label('Görsel')
                    ->circular()
                    ->stacked()
                    ->limit(1)
                    ->disk('public'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Başlık')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->sortable(),

                Tables\Columns\TextColumn::make('location')
                    ->label('Konum')
                    ->sortable(),

                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Aktif'),

                Tables\Columns\TextColumn::make('order')
                    ->label('Sıra')
                    ->sortable(),
            ])
            ->defaultSort('order')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'Konut' => 'Konut',
                        'Ticari' => 'Ticari',
                        'Endüstriyel' => 'Endüstriyel',
                        'Karma' => 'Karma Kullanım',
                    ]),

                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Durum'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
