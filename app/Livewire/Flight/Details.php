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

    public $from_id = '';
    public $to_id = '';

    public $type;
    public $t_date;
    public $p;


    protected $queryString = [
        'from_id' => ['except' => '', 'as' => 'f'],
        'to_id' => ['except' => '', 'as' => 't'],
        'type' => ['except' => '', 'as' => 'ty'],
        't_date' => ['except' => '', 'as' => 'td'],
        'p' => ['except' => '', 'as' => 'p']
    ];


    public function mount()
    {
        $data = [
            'f' => $this->from_id,
            't' => $this->to_id,
            'ty' => $this->type ?? 'all',
            'td' => $this->t_date,
            'p' => $this->p ?? 1
        ];

        $this->searchDetails($data);
     
    }

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
            ->when(array_key_exists('f', $data) && $data['f'], function ($query) use ($data) {
                $query->whereHas('origin', function ($query) use ($data) {
                    $query->where('city_id', $data['f']);
                });
            })

            //t is to city id
            ->when(array_key_exists('t', $data)  && $data['t'], function ($query) use ($data) {
                $query->whereHas('destination', function ($query) use ($data) {
                    $query->where('city_id', $data['t']);
                });
            })

            //ty is type
            ->when(array_key_exists('ty', $data)  && $data['ty'], function ($query) use ($data) {
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
            ->when(array_key_exists('p', $data)  && $data['p'], function ($query) use ($data) {
                $query->where('available_seats', '>=', $data['p']);
            })

            ->when(array_key_exists('price', $this->filters), function ($query) use ($data) {
                $query->when($this->filters['price'] != null, function ($query) use ($data) {
                    $query->whereBetween('price', $this->filters['price']);
                });
            })

            ->when(array_key_exists('airlines', $this->filters), function ($query) use ($data) {
                $query->when(count($this->filters['airlines']) > 0, function ($query) use ($data) {
                    $query->whereIn('airline_id', $this->filters['airlines']);
                });
            })

            ->when(array_key_exists('time', $this->filters), function ($query) use ($data) {
                $query->when(gettype($this->filters['time'])  == 'array' && $this->filters['time'] != null, function ($query) use ($data) {
                    $query->whereRaw("TIME(departure_time) >= ? AND TIME(departure_time) <= ?", $this->filters['time']);
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
        if ($filters['time'] != null && $filters['time'] != '') {
            $this->filters['time']  = explode('-', $filters['time']);
        }
        $this->searchDetails($this->searchData);
    }
}
