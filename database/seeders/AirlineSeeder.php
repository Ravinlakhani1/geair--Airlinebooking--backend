<?php

namespace Database\Seeders;

use App\Models\Airline;
use App\Models\Plane;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $airlines = [
            [
                'name' => 'Air India',
                'code' => 'AI',
                'logo' => 'airlines/air-india.png'
            ],
            [
                'name' => 'Indigo',
                'code' => '6E',
                'logo' => 'airlines/indigo.png'
            ],
            [
                'name' => 'SpiceJet',
                'code' => 'SG',
                'logo' => 'airlines/spicejet.png'
            ],
            [
                'name' => 'Vistara',
                'code' => 'UK',
                'logo' => 'airlines/vistara.png'
            ]
        ];

        foreach ($airlines as $airline) {
            Airline::create($airline);
        }

        $planes = [
            [
                'name' => 'Airbus A319',
                'code' => '319',
                'airline_id' => 1,
                'capacity' => 144,
            ],
            [
                'name' => 'Airbus A320',
                'code' => '320',
                'airline_id' => 1,
                'capacity' => 180,
            ],
            [
                'name' => 'Airbus A321',
                'code' => '321',
                'airline_id' => 1,
                'capacity' => 220,
            ],
            [
                'name' => 'Airbus A330',
                'code' => '330',
                'airline_id' => 1,
                'capacity' => 295,
            ],
            [
                'name' => 'Airbus A350',
                'code' => '350',
                'airline_id' => 1,
                'capacity' => 295,
            ],
            [
                'name' => 'Airbus A380',
                'code' => '380',
                'airline_id' => 1,
                'capacity' => 495,
            ],
            [
                'name' => 'Boeing 737',
                'code' => '737',
                'airline_id' => 1,
                'capacity' => 215,
            ],
            [
                'name' => 'Boeing 747',
                'code' => '747',
                'airline_id' => 1,
                'capacity' => 660,
            ],
            [
                'name' => 'Boeing 777',
                'code' => '777',
                'airline_id' => 1,
                'capacity' => 365,
            ],
            [
                'name' => 'Boeing 787',
                'code' => '787',
                'airline_id' => 1,
                'capacity' => 335,
            ],
            [
                'name' => 'ATR 42',
                'code' => 'AT4',
                'airline_id' => 1,
                'capacity' => 48,
            ],
            [
                'name' => 'ATR 72',
                'code' => 'AT7',
                'airline_id' => 1,
                'capacity' => 72,
            ],
            [
                'name' => 'Bombardier Q400',
                'code' => 'DH8',
                'airline_id' => 1,
                'capacity' => 78,
            ],
            [
                'name' => 'Embraer 170',
                'code' => 'E70',
                'airline_id' => 1,
                'capacity' => 78,
            ],
            [
                'name' => 'Embraer 175',
                'code' => 'E75',
                'airline_id' => 1,
                'capacity' => 78,
            ],
            [
                'name' => 'Embraer 190',
                'code' => 'E90',
                'airline_id' => 1,
                'capacity' => 114,
            ],
            [
                'name' => 'Embraer 195',
                'code' => 'E95',
                'airline_id' => 1,
                'capacity' => 114,
            ],
            [
                'name' => 'Boeing 737-800',
                'code' => '738',
                'airline_id' => 2,
                'capacity' => 189,
            ],
            [
                'name' => 'Boeing 737-900',
                'code' => '739',
                'airline_id' => 2,
                'capacity' => 212,
            ],
            [
                'name' => 'Airbus A320-200',
                'code' => '320',
                'airline_id' => 2,
                'capacity' => 180,
            ],
            [
                'name' => 'Airbus A321neo',
                'code' => '321',
                'airline_id' => 2,
                'capacity' => 222,
            ],
            [
                'name' => 'Airbus A321neo LR',
                'code' => '321',
                'airline_id' => 2,
                'capacity' => 222,
            ],
            [
                'name' => 'Airbus A321neo XLR',
                'code' => '321',
                'airline_id' => 2,
                'capacity' => 222,
            ],
            [
                'name' => 'Airbus A330-200',
                'code' => '332',
                'airline_id' => 2,
                'capacity' => 238,
            ],
            [
                'name' => 'Airbus A330-300',
                'code' => '333',
                'airline_id' => 2,
                'capacity' => 290,
            ],
            [
                'name' => 'Boeing 787-8',
                'code' => '788',
                'airline_id' => 2,
                'capacity' => 256,
            ],
            [
                'name' => 'Boeing 787-9',
                'code' => '789',
                'airline_id' => 2,
                'capacity' => 338,
            ],
            [
                'name' => 'Boeing 787-10',
                'code' => '78J',
                'airline_id' => 2,
                'capacity' => 338,
            ],
            [
                'name' => 'Boeing 777-200LR',
                'code' => '77L',
                'airline_id' => 2,
                'capacity' => 238,
            ],
            [
                'name' => 'Boeing 777-300ER',
                'code' => '77W',
                'airline_id' => 2,
                'capacity' => 342,
            ],
            [
                'name' => 'Boeing 777-9',
                'code' => '779',
                'airline_id' => 2,
                'capacity' => 414,
            ],
            [
                'name' => 'Boeing 747-400',
                'code' => '744',
                'airline_id' => 2,
                'capacity' => 423,
            ],
            [
                'name' => 'Boeing 747-8',
                'code' => '748',
                'airline_id' => 2,
                'capacity' => 467,
            ],
            [
                'name' => 'Boeing 737-700',
                'code' => '73G',
                'airline_id' => 3,
                'capacity' => 149,
            ],
            [
                'name' => 'Boeing 737-800',
                'code' => '738',
                'airline_id' => 3,
                'capacity' => 189,
            ],
            [
                'name' => 'Boeing 737-900ER',
                'code' => '739',
                'airline_id' => 3,
                'capacity' => 212,
            ],
            [
                'name' => 'Boeing 737 MAX 8',
                'code' => '7M8',
                'airline_id' => 3,
                'capacity' => 210,
            ],
            [
                'name' => 'Boeing 737 MAX 9',
                'code' => '7M9',
                'airline_id' => 3,
                'capacity' => 220,
            ],
            [
                'name' => 'Boeing 737 MAX 10',
                'code' => '7M10',
                'airline_id' => 3,
                'capacity' => 230,
            ],
            [
                'name' => 'Boeing 747-400',
                'code' => '744',
                'airline_id' => 3,
                'capacity' => 416,
            ],
            [
                'name' => 'Boeing 747-8',
                'code' => '748',
                'airline_id' => 3,
                'capacity' => 467,
            ],
            [
                'name' => 'Boeing 757-200',
                'code' => '752',
                'airline_id' => 3,
                'capacity' => 176,
            ],
            [
                'name' => 'Boeing 757-300',
                'code' => '753',
                'airline_id' => 3,
                'capacity' => 210,
            ],
            [
                'name' => 'Boeing 767-300ER',
                'code' => '763',
                'airline_id' => 3,
                'capacity' => 261,
            ],
            [
                'name' => 'Boeing 767-400ER',
                'code' => '764',
                'airline_id' => 3,
                'capacity' => 304,
            ],
            [
                'name' => 'Boeing 777-200ER',
                'code' => '772',
                'airline_id' => 3,
                'capacity' => 304,
            ],
            [
                'name' => 'Boeing 777-200LR',
                'code' => '77L',
                'airline_id' => 3,
                'capacity' => 276,
            ],
            [
                'name' => 'Boeing 777-300ER',
                'code' => '77W',
                'airline_id' => 3,
                'capacity' => 366,
            ],
            [
                'name' => 'Boeing 787-8',
                'code' => '788',
                'airline_id' => 3,
                'capacity' => 226,
            ],
            [
                'name' => 'Boeing 787-9',
                'code' => '789',
                'airline_id' => 3,
                'capacity' => 276,
            ],
            [
                'name' => 'Boeing 787-10',
                'code' => '78J',
                'airline_id' => 3,
                'capacity' => 276,
            ],
            [
                'name' => 'Airbus A319-100',
                'code' => '319',
                'airline_id' => 4,
                'capacity' => 124,
            ],
            [
                'name' => 'Airbus A320-200',
                'code' => '320',
                'airline_id' => 4,
                'capacity' => 150,
            ],
            [
                'name' => 'Airbus A321-200',
                'code' => '321',
                'airline_id' => 4,
                'capacity' => 185,
            ],
            [
                'name' => 'Airbus A330-200',
                'code' => '332',
                'airline_id' => 4,
                'capacity' => 293,
            ],
            [
                'name' => 'Airbus A330-300',
                'code' => '333',
                'airline_id' => 4,
                'capacity' => 293,
            ],
            [
                'name' => 'Airbus A350-900',
                'code' => '359',
                'airline_id' => 4,
                'capacity' => 293,
            ],
            [
                'name' => 'Airbus A380-800',
                'code' => '388',
                'airline_id' => 4,
                'capacity' => 489,
            ],
            [
                'name' => 'Boeing 737-700',
                'code' => '73G',
                'airline_id' => 4,
                'capacity' => 126,
            ],
            [
                'name' => 'Boeing 737-800',
                'code' => '738',
                'airline_id' => 4,
                'capacity' => 162,
            ],
            [
                'name' => 'Boeing 737-900ER',
                'code' => '739',
                'airline_id' => 4,
                'capacity' => 180,
            ],
        ];

        foreach ($planes as $plane) {
            Plane::create($plane);
        }


        DB::table('airports')->insert([
            [
                'id' => 1,
                'name' => 'Indira Gandhi International Airport',
                'code' => 'DEL',
                'city_id' => 133210,
                'deleted_at' => null,
                'created_at' => '2023-09-03 00:04:15',
                'updated_at' => '2023-09-03 00:05:29',
            ],
            [
                'id' => 2,
                'name' => 'Chhatrapati Shivaji International Airport',
                'code' => 'BOM',
                'city_id' => 133024,
                'deleted_at' => null,
                'created_at' => '2023-09-03 00:04:45',
                'updated_at' => '2023-09-03 00:04:45',
            ],
            [
                'id' => 3,
                'name' => 'Chennai International Airport',
                'code' => 'MAA',
                'city_id' => 131517,
                'deleted_at' => null,
                'created_at' => '2023-09-03 00:05:15',
                'updated_at' => '2023-09-03 00:05:15',
            ],
            [
                'id' => 4,
                'name' => 'Kempegowda International Airport',
                'code' => 'BLR',
                'city_id' => 57847,
                'deleted_at' => null,
                'created_at' => '2023-09-03 00:18:03',
                'updated_at' => '2023-09-03 00:18:03',
            ],
            [
                'id' => 5,
                'name' => 'Sardar Vallabhbhai Patel International Airport',
                'code' => 'AMD',
                'city_id' => 57606,
                'deleted_at' => null,
                'created_at' => '2023-09-03 00:18:33',
                'updated_at' => '2023-09-03 00:18:33',
            ],
        ]);

        // Insert data into the 'flights' table
        DB::table('flights')->insert([
            [
                'id' => 1,
                'flight_number' => 'F1AMDBOMECO',
                'flight_type'=> config('flight_type.economy'),
                'airline_id' => 1,
                'plane_id' => 3,
                'origin_id' => 5,
                'destination_id' => 2,
                'departure_time' => '2023-09-05 12:15:00',
                'arrival_time' => '2023-09-05 13:30:00',
                'available_seats' => 220,
                'total_seats' => 220,
                'price' => 3000.00,
                'status' => 'Scheduled',
                'deleted_at' => null,
                'created_at' => '2023-09-03 00:21:46',
                'updated_at' => '2023-09-03 00:21:46',
            ],
            [
                'id' => 2,
                'flight_number' => 'F2DLHBLRBUS',
                'flight_type'=> config('flight_type.business_class'),
                'airline_id' => 4,
                'plane_id' => 59,
                'origin_id' => 1,
                'destination_id' => 4,
                'departure_time' => '2023-09-23 13:00:00',
                'arrival_time' => '2023-09-04 15:00:00',
                'available_seats' => 126,
                'total_seats' => 126,
                'price' => 8000.00,
                'status' => 'Scheduled',
                'deleted_at' => null,
                'created_at' => '2023-09-03 00:33:06',
                'updated_at' => '2023-09-03 00:33:06',
            ],
        ]);
    }
}
