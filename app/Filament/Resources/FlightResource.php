<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FlightResource\Pages;
use App\Filament\Resources\FlightResource\RelationManagers;
use App\Models\Airport;
use App\Models\City;
use App\Models\Flight;
use App\Models\Plane;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Coolsam\FilamentFlatpickr\Forms\Components\Flatpickr;

class FlightResource extends Resource
{
    protected static ?string $model = Flight::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make([

                    Forms\Components\Section::make(__('Flight Details'))
                        ->schema([
                            Forms\Components\TextInput::make('flight_number')
                                ->autofocus()
                                ->required()
                                ->unique(Flight::class, 'flight_number', fn ($record) => $record)
                                ->placeholder(__('Flight Number')),
                            Forms\Components\Select::make('flight_type')
                                ->options(config('flight_type'))
                                ->required(),
                            Forms\Components\TextInput::make('total_seats')
                                ->required()
                                ->numeric()
                                ->readOnly()
                                ->placeholder(__('Total Seats')),
                            Forms\Components\TextInput::make('price')
                                ->required()
                                ->numeric()
                                ->prefix('₹')
                                ->placeholder(__('Price')),
                        ])->columns(2),
                    Forms\Components\Section::make(__('Places and Times'))
                        ->schema([
                            Forms\Components\Select::make('origin_id')
                                ->label('Origin')
                                ->required()
                                ->searchable()
                                ->getSearchResultsUsing(fn (string $search): array => Airport::where('name', 'like', "%{$search}%")->orWhereHas('city', function ($q) use ($search) {
                                    return $q->where('name', 'like', "%{$search}%");
                                })->limit(50)->pluck('name', 'id')->toArray())
                                ->placeholder(__('Origin')),
                            Forms\Components\Select::make('destination_id')
                                ->label('Destination')
                                ->required()
                                ->searchable()
                                ->getSearchResultsUsing(fn (string $search): array => Airport::where('name', 'like', "%{$search}%")->orWhereHas('city', function ($q) use ($search) {
                                    return $q->where('name', 'like', "%{$search}%");
                                })->limit(50)->pluck('name', 'id')->toArray())
                                ->placeholder(__('Destination')),
                            Flatpickr::make('departure_time')
                                ->required()
                                ->enableTime()
                                ->dateFormat('y-m-d H:i:S')
                                ->placeholder(__('Departure Time')),
                            Flatpickr::make('arrival_time')
                                ->required()
                                ->enableTime()
                                ->placeholder(__('Arrival Time')),
                        ])->columns(2),
                ])->columnSpan(['lg' => 2]),
                Forms\Components\Group::make([
                    Forms\Components\Section::make(__('Airline Details'))
                        ->schema([
                            Forms\Components\Select::make('airline_id')
                                ->label(__('Select Airline'))
                                ->relationship('airline', 'name')
                                ->placeholder(__('Select Airline'))
                                ->required()
                                ->reactive(),
                            Forms\Components\Select::make('plane_id')
                                ->label(__('Select Plane'))
                                ->required()
                                ->searchable()
                                ->options(fn (callable $get) => Plane::where('airline_id', $get('airline_id'))->pluck('name', 'id')->toArray())
                                ->live(onBlur: true)
                                ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                    if ($operation !== 'create') {
                                        return;
                                    }
                                    $set('total_seats', Plane::find($state)->capacity);
                                })
                                ->placeholder(__('Select Plane')),
                        ]),
                ])->columnSpan(['lg' => 1]),

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('flight_number')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('flight_type')
                    ->getStateUsing(fn ($record): ?string => config('flight_type.' . $record->flight_type) ?? null),

                Tables\Columns\TextColumn::make('origin.name', __('Origin'))
                    ->sortable()
                    ->limit(30)
                    ->searchable(),
                Tables\Columns\TextColumn::make('destination.name', __('Destination'))
                    ->sortable()
                    ->limit(30)
                    ->searchable(),
                Tables\Columns\TextColumn::make('departure_time', __('Departure Time'))
                    ->sortable()
                    ->dateTime()
                    ->searchable(),
                Tables\Columns\TextColumn::make('arrival_time', __('Arrival Time'))
                    ->sortable()
                    ->dateTime()
                    ->searchable(),
                Tables\Columns\TextColumn::make('airline.name', __('Airline'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('plane.name', __('Plane'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('price', __('Price'))
                    ->sortable()
                    ->prefix('₹')
                    ->searchable(),
                Tables\Columns\TextColumn::make('available_seats', __('Available Seats'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_seats', __('Total Seats'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status', __('Status'))
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListFlights::route('/'),
            'create' => Pages\CreateFlight::route('/create'),
            'edit' => Pages\EditFlight::route('/{record}/edit'),
        ];
    }
}
