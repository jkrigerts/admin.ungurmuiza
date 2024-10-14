<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $modelLabel = 'Pasākums';
    protected static ?string $pluralModelLabel = 'Pasākumi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->columns([
                    'sm' => 1,
                    'md' => 1,
                ])->schema([
                    TextInput::make('title')
                        ->label('Virsraksts')
                        ->required()
                        ->maxLength(255),
                    ]),

                    Section::make()
                    ->columns([
                        'sm' => 2
                    ])->schema([
                        DatePicker::make('date')
                            ->label('Datums')
                            ->native(false)
                            ->placeholder('Okt 12, 2024'),
                        DatePicker::make('date_untill')
                            ->label('Datums līdz')
                            ->native(false)
                            ->placeholder('Okt 19, 2024'),
                        TimePicker::make('start_time')
                            ->label('Sākuma laiks')
                            ->native(false)
                            ->seconds(false)
                            ->placeholder('18:00'),
                        TimePicker::make('end_time')
                            ->label('Beigu laiks')
                            ->native(false)
                            ->seconds(false)
                            ->placeholder('21:00'),
                        ]),

                        Section::make()
                        ->columns([
                            'sm' => 1,
                            'md' => 1,
                        ])->schema([
                            TextInput::make('short_info')
                            ->label('Īss apraksts sākumlapā')
                            ->maxLength(255),
                            
                            FileUpload::make("image")
                                ->label("Attēls")
                                ->required(),
                            RichEditor::make("description")
                                ->label("Apraksts")
                                ->required()
                                ->toolbarButtons([
                                    "blockquote",
                                    "bold",
                                    "bulletList",
                                    "h2",
                                    "h3",
                                    "italic",
                                    "link",
                                    "orderedList",
                                    "redo",
                                    "strike",
                                    "underline",
                                    "undo",
                                ]),
                            TextInput::make('order_number')
                                ->label('Numurs pēc kārtas (var atstāt tukšu)')
                                ->integer(),
                            Checkbox::make("published")
                                ->label("Publicēt")
                                ->default(true),
                            ]),
                
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->modifyQueryUsing(fn (Builder $query) => $query->orderBy('date', 'ASC'))
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Virsraksts')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->label('Datums')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_time')
                    ->label('Laiks')
                    ->time(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Attēls'),
                Tables\Columns\CheckboxColumn::make("published")
                    ->label("Publicēts"),

                Tables\Columns\TextInputColumn::make("order_number")
                    ->label("Nr. p. k.")
                    ->rules(["numeric"]),
            ])
            ->defaultSort('updated_at', "desc")
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
