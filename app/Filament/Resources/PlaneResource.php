<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlaneResource\Pages;
use App\Filament\Resources\PlaneResource\RelationManagers;
use App\Models\Plane;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlaneResource extends Resource
{
    protected static ?string $model = Plane::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__('Plane Details'))
                    ->schema(
                        [
                            Forms\Components\TextInput::make('name')
                                ->autofocus()
                                ->required()
                                ->unique(Plane::class, 'name')
                                ->placeholder(__('Name'))
                                ->columnSpan(1),

                            Forms\Components\TextInput::make('code')
                                ->required()
                                ->unique(Plane::class, 'code')
                                ->placeholder(__('Code'))
                                ->columnSpan(1),
                            Forms\Components\TextInput::make('capacity')
                                ->required()
                                ->numeric()
                                ->placeholder(__('Capacity'))
                                ->columnSpanFull(),

                            Forms\Components\BelongsToSelect::make('airline_id')
                                ->relationship('airline', 'name')
                                ->required()
                                ->placeholder(__('Select Airline'))
                                ->columnSpanFull(),
                        ]
                    )->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('code')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('capacity'),
                Tables\Columns\TextColumn::make('airline.name')
                    ->searchable()
                    ->sortable(),
            ])
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListPlanes::route('/'),
            'create' => Pages\CreatePlane::route('/create'),
            'edit' => Pages\EditPlane::route('/{record}/edit'),
        ];
    }
}
