<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelResource\Pages;
use Filament\Forms\Components\{Grid, RichEditor, Select, TextInput, Textarea, FileUpload, Group, Section, Toggle};
use App\Models\Hotel;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Label;

class HotelResource extends Resource
{
    protected static ?string $model = Hotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Hotel Name')
                                    ->columnSpanFull()
                                    ->reactive(),

                                TextInput::make('affiliate_link')
                                    ->label('Affiliate Link')
                                    ->columnSpanFull()
                                    ->url()
                                    ->reactive(),

                                RichEditor::make('foodConcept')
                                    ->required()
                                    ->label('Food Concept')
                                    ->columnSpanFull(),

                                RichEditor::make('childrenConcept')
                                    ->required()
                                    ->label('Children Concept')
                                    ->columnSpanFull(),

                                RichEditor::make('beach')
                                    ->required()
                                    ->label('Beach')
                                    ->columnSpanFull(),

                                RichEditor::make('honeymoon')
                                    ->required()
                                    ->label('Honeymoon')
                                    ->columnSpanFull(),

                                RichEditor::make('generalWarning')
                                    ->required()
                                    ->label('General Warning')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpan(2)
                    ->columns(2),


                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([

                                TextInput::make('city')
                                    ->maxLength(100)
                                    ->label('City')
                                    ->reactive(),

                                TextInput::make('country')
                                    ->maxLength(25)
                                    ->label('Country')
                                    ->reactive(),

                                Textarea::make('address')
                                    ->required()
                                    ->rows(4)
                                    ->autosize()
                                    ->maxLength(255),

                            ])
                            ->columnSpan(1),

                        Section::make()
                            ->schema([

                                Textarea::make('summary')
                                    ->required()
                                    ->rows(4)
                                    ->autosize()
                                    ->maxLength(1500),
                            ])
                            ->columnSpan(1),
                        Section::make()
                            ->schema([
                                Textarea::make('about')
                                    ->required()
                                    ->rows(4)
                                    ->label('About')
                                    ->autosize()
                                    ->maxLength(2000),
                            ])
                            ->columnSpan(1),

                        Section::make()
                            ->schema([
                                Select::make('facilities')
                                    ->multiple()
                                    ->preload()
                                    ->relationship(titleAttribute: 'heading'),

                                Select::make('property_type')
                                    ->label('Property Type')
                                    ->options([
                                        'Pensions' => 'Pensions',
                                        'B&Bs & Inns' => 'B&Bs & Inns',
                                        'Hotels' => 'Hotels',
                                        'Resorts' => 'Resorts',
                                        'All-inclusives' => 'All-inclusives',
                                        'Specialty lodgings' => 'Specialty lodgings',
                                        'Lodges' => 'Lodges',
                                        'Villa' => 'Villa',
                                        'Hostels' => 'Hostels',
                                        'Condos' => 'Condos',
                                        'Cottage' => 'Cottage',
                                        'Campgrounds' => 'Campgrounds',
                                        'Motels' => 'Motels',
                                    ])
                                    ->required()
                                    ->searchable(),

                                Select::make('hotel_class')
                                    ->label('Hotel Class')
                                    ->options([
                                        '5 Star' => '5 Star',
                                        '4 Star' => '4 Star',
                                        '3 Star' => '3 Star',
                                        '2 Star' => '2 Star',
                                    ])
                                    ->required()
                                    ->searchable(),

                                Select::make('hotel_style')
                                    ->label('Hotel Style')
                                    ->options([
                                        'Budget' => 'Budget',
                                        'Mid-range' => 'Mid-range',
                                        'Luxury' => 'Luxury',
                                        'Family-friend' => 'Family-friend',
                                        'Business' => 'Business',
                                        'Romantic' => 'Romantic',
                                        'Modern' => 'Modern',
                                    ])

                                    ->required()
                                    ->searchable(),

                            ])
                            ->columnSpan(1),

                        Section::make()
                            ->schema([
                                Select::make('freeServices')
                                    ->label('Free Services')
                                    ->multiple()
                                    ->searchable()
                                    ->options([
                                        'Common TV area' => 'Common TV area',
                                        'Wireless internet connection' => 'Wireless internet connection',
                                        'kids club' => 'kids club',
                                        'Animation' => 'Animation',
                                        'Fitness' => 'Fitness',
                                        'Masjid' => 'Masjid',
                                        'boccia' => 'boccia',
                                        'Indoor pool' => 'Indoor pool',
                                        'Aquapark (8 slides)' => 'Aquapark (8 slides)',
                                        'Volleyball' => 'Volleyball',
                                        'Game room' => 'Game room',
                                        'TV Lounge' => 'TV Lounge',
                                        'Car park' => 'Car park',
                                        'Tennis court' => 'Tennis court',
                                        'Wireless Internet' => 'Wireless Internet',
                                        'Billiards' => 'Billiards',
                                        'animation team' => 'animation team',
                                        'Bowling' => 'Bowling',
                                        'Water ball' => 'Water ball',
                                        'Mini Football' => 'Mini Football',
                                        'Ladies Indoor Pool' => 'Ladies Indoor Pool',
                                        'Outdoor Restaurant' => 'Outdoor Restaurant',
                                        'Indoor Restaurant' => 'Indoor Restaurant',
                                        'Beach volleyball' => 'Beach volleyball',
                                        'Basketball' => 'Basketball',
                                        'Ping pong' => 'Ping pong',
                                        'Tennis Equipment' => 'Tennis Equipment',
                                        'Darts' => 'Darts',
                                        'Fitness Center' => 'Fitness Center',
                                        'Archery' => 'Archery',
                                        'Aerobic' => 'Aerobic',
                                        'Kiddie pool' => 'Kiddie pool',
                                        'Outdoor pool' => 'Outdoor pool',
                                        'Water park' => 'Water park',
                                        'Waterslide' => 'Waterslide',
                                        'Steam room' => 'Steam room',
                                        'Bath' => 'Bath',
                                        'Sauna' => 'Sauna',
                                        'Turkish coffee' => 'Turkish coffee',
                                        'Fitness course' => 'Fitness course',
                                        'Gym' => 'Gym',
                                        'Bike rental' => 'Bike rental',
                                        'Meeting room' => 'Meeting room',
                                        'On-site parking' => 'On-site parking',
                                        'Public spaces and rooms' => 'Public spaces and rooms',
                                        'Wi-Fi (Wireless internet)' => 'Wi-Fi (Wireless internet)',
                                        'Mini bar' => 'Mini bar',
                                        'Reception Servicer' => 'Reception Service',
                                        'Outdoor Pool (separate for men and women)' => 'Outdoor Pool (separate for men and women)',
                                        'Safety Deposit Box (In Rooms)' => 'Safety Deposit Box (In Rooms)',
                                        'Turkish bath' => 'Turkish bath',
                                        'Animation Shows-Mini Club' => 'Animation Shows-Mini Club',
                                        'Minibar (Once upon arrival)' => 'Minibar (Once upon arrival)',
                                        'Beach towel' => 'Beach towel',
                                        'Mixed Outdoor Pool' => 'Mixed Outdoor Pool',
                                        'Sunbeds and Umbrellas' => 'Sunbeds and Umbrellas',
                                        'Slides' => 'Slides',
                                        'Childrens Playground' => 'Childrens Playground',
                                        'Disco' => 'Disco',
                                        'Mini Club (10:00-24:00)' => 'Mini Club (10:00-24:00)',
                                        'Chess-Darts-Table Tennis-Playing Cards' => 'Chess-Darts-Table Tennis-Playing Cards',
                                        'At the Beach and Pools ( Sunbeds, Mattresses and Towels)' => 'At the Beach and Pools ( Sunbeds, Mattresses and Towels)',
                                        'Table tennis, okey, chess, backgammon, scrabble etc. games' => 'Table tennis, okey, chess, backgammon, scrabble etc. games',
                                        'Billiards - game room' => 'Billiards - game room',
                                        'Cinema Screening (requests are taken by reservation)' => 'Cinema Screening (requests are taken by reservation)',
                                        'Game Hall (The use of game equipment belonging to the enterprise in the hall is chargeable.)' => 'Game Hall (The use of game equipment belonging to the enterprise in the hall is chargeable.)',


                                    ]),

                                Select::make('paidServices')
                                    ->label('Paid Services')
                                    ->multiple()
                                    ->searchable()
                                    ->options([
                                        'Doctor' => 'Doctor',
                                        'fax' => 'fax',
                                        'Telephone' => 'Telephone',
                                        'Health Service' => 'Health Service',
                                        'Banana' => 'Banana',
                                        'Jetski' => 'Jetski',
                                        'Baby care' => 'Baby care',
                                        'Rent a car' => 'Rent a car',
                                        'Parachute' => 'Parachute',
                                        'Jacuzzi' => 'Jacuzzi',
                                        'Surfing' => 'Surfing',
                                        'Gift Shop' => 'Gift Shop',
                                        'Billiards' => 'Billiards',
                                        'Water sports' => 'Water sports',
                                        'Canoe' => 'Canoe',
                                        'Diving School' => 'Diving School',
                                        'Sailboat' => 'Sailboat',
                                        'Game room' => 'Game room',
                                        'Hair care' => 'Hair care',
                                        'Beauty Center' => 'Beauty Center',
                                        'Spa Facilities' => 'Spa Facilities',
                                        'Laundry' => 'Laundry',
                                        'A La Carte Restorans' => 'A La Carte Restorans',
                                        'Airport Transfer (International Service)' => 'Airport Transfer (International Service)',
                                        'Car Rental Service' => 'Car Rental Service',
                                        'family baths' => 'family baths',
                                        'Beauty centre' => 'Beauty centre',
                                        'Pouch' => 'Pouch',
                                        'Minimarket' => 'Minimarket',
                                        'Massage' => 'Massage',
                                        'Freshly Squeezed Fruit Juices' => 'Freshly Squeezed Fruit Juices',
                                        'Tennis Court Lighting' => 'Tennis Court Lighting',
                                        'The stroller' => 'The stroller',
                                        'Parachute (Foreign Service)' => 'Parachute (Foreign Service)',
                                        'hotel doctor' => 'hotel doctor',
                                        'Room service' => 'Room service',
                                        'Nargile' => 'Nargile',
                                        'swimming lesson' => 'swimming lesson',
                                        'Late check-out room use' => 'Late check-out room use',
                                        'Bali House' => 'Bali House',
                                        'Banana (Foreign Service)' => 'Banana (Foreign Service)',
                                        'Popcorn' => 'Popcorn',
                                        'Birthday cake' => 'Birthday cake',
                                        'Water Sports (Foreign Service)' => 'Water Sports (Foreign Service)',
                                        'Baby Monitor' => 'Baby Monitor',
                                        'Ala Carte Restaurant' => 'Ala Carte Restaurant',
                                        'Private Pool' => 'Private Pool',
                                        'Canoe (Foreign Service)' => 'Canoe (Foreign Service)',
                                        'Jet Ski(Foreign Service)' => 'Jet Ski(Foreign Service)',
                                        'Boutique' => 'Boutique',
                                        'Souvenir' => 'Souvenir',
                                        'Market' => 'Market',
                                        'Hairdresser and Beauty Saloon' => 'Hairdresser and Beauty Saloon',
                                        'Hairdresser' => 'Hairdresser',
                                        'Shopping malls' => 'Shopping malls',
                                        'postal service' => 'postal service',
                                        'Ironing and Laundry Services' => 'Ironing and Laundry Services',
                                        'Photographer' => 'Photographer',
                                        'Sightseeing Tours' => 'Sightseeing Tours',
                                        'Motorized and non-motorized water sports' => 'Motorized and non-motorized water sports',
                                        'All food and drinks after 24:00' => 'All food and drinks after 24:00',
                                    ]),

                                FileUpload::make('images')
                                    ->directory('hotel')
                                    ->multiple()
                                    ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png']),

                                Toggle::make('status')
                                    ->onIcon('heroicon-o-bolt')
                                    ->offIcon('heroicon-o-building-library')
                                    ->onColor('success')
                                    ->offColor('danger')
                                    ->columnSpan('full')
                                    ->label('Top Hotel'),

                            ])
                            ->columnSpan(1),

                    ]),

                // Grid::make(3)

                //     ->schema([]),

            ])->columns([
                'default' => 3,
                'sm' => 3,
                'md' => 3,
                'lg' => 3,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->limit(30)
                    ->label('Hotel Name'),

                TextColumn::make('hotel_style')
                    ->sortable()
                    ->searchable()
                    ->label('Hotel Style'),
                ImageColumn::make('images')
                    ->label('Images')
                    ->sortable(),

                TextColumn::make('hotel_class')
                    ->sortable()
                    ->searchable()
                    ->label('Hotel Class'),

                TextColumn::make('property_type')
                    ->label('Property Type')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([

                // Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListHotels::route('/'),
            'create' => Pages\CreateHotel::route('/create'),
            'edit' => Pages\EditHotel::route('/{record}/edit'),
        ];
    }
}
