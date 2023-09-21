<?php

namespace App\Livewire\Flight;

use App\Models\Flight;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\On;


class Details extends Component
{

    public $flights = [];
    public $filters = [];
    public $searchData = [];
    public function render()
    {
        return view('livewire.flight.details');
    }

    #[On('searchDetails')]
    public function searchDetails($data)
    {
        $this->searchData = $data;
        $this->flights = Flight::query()

            // f is from city id
            ->when(array_key_exists('f', $data), function ($query) use ($data) {
                $query->whereHas('origin', function ($query) use ($data) {
                    $query->where('city_id', $data['f']);
                });
            })

            //t is to city id
            ->when(array_key_exists('t', $data), function ($query) use ($data) {
                $query->whereHas('destination', function ($query) use ($data) {
                    $query->where('city_id', $data['t']);
                });
            })

            //ty is type
            ->when(array_key_exists('ty', $data), function ($query) use ($data) {
                $query->when(($data['ty'] != 'all' && $data['ty'] != ''), function ($query) use ($data) {
                    $query->where('flight_type', $data['ty']);
                });
            })

            // td is traviling date
            ->when(array_key_exists('td', $data), function ($query) use ($data) {
                $query->when($data['td'] != null, function ($query) use ($data) {
                    $query->whereDate('departure_time', $data['td']);
                });
                $query->when($data['td'] == null, function ($query) use ($data) {
                    $query->whereDate('departure_time', '>=', now());
                });
            })

            // p is passenger
            ->when(array_key_exists('p', $data), function ($query) use ($data) {
                $query->where('available_seats', '>=', $data['p']);
            })

            ->when(array_key_exists('price', $this->filters), function ($query) use ($data) {
                $query->when($this->filters['price'] != null, function ($query) use ($data) {
                    $query->whereBetween('price', $this->filters['price']);
                });
            })

            ->when(array_key_exists('airlines', $this->filters), function ($query) use ($data) {
                $query->when(count($this->filters['airlines']) > 0  , function ($query) use ($data) {
                    $query->whereIn('airline_id', $this->filters['airlines']);
                });
            })


            ->with(['airline', 'plane', 'origin', 'destination'])
            ->limit(5)
            ->latest()
            ->get();
            // dd($this->flights);
    }


    public function timeDifference($start, $end)
    {

        // Create Carbon instances from the timestamps
        $carbon1 = Carbon::parse($start);
        $carbon2 = Carbon::parse($end);

        // Calculate the time difference in hours and minutes
        $hoursDifference = $carbon1->diffInHours($carbon2);
        $minutesDifference = $carbon1->diffInMinutes($carbon2) % 60;

        // Create the desired format
        $timeDifference = $hoursDifference . 'h ' . $minutesDifference . 'm';

        // Output the result
        return $timeDifference;
    }

    #[On('set-filters')]
    public function setFilters($filters)
    {
        $this->filters = $filters;
        $this->searchDetails($this->searchData);
    }
}
