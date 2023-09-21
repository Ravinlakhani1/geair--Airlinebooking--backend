<?php

namespace App\Livewire\Flight;

use App\Models\Airline;
use Livewire\Component;

class Filters extends Component
{
    public $price = null;
    public $time = null;
    public $airline = [];
    public $airlines = [];

    public function mount()
    {
        $this->airlines = Airline::limit(7)->pluck('name', 'id')->toArray();
    }

    public function render()
    {
        return view('livewire.flight.filters');
    }

    public function setPrice($price)
    {
        if ($price) {
            $arr = explode(' - ', $price);
            $p1 = str_replace('₹', '', $arr[0]);
            $p2 = str_replace('₹', '', $arr[1]);
            $this->price = [$p1, $p2];
        }
        $this->applyFilters();
    }

    public function setTime($time)
    {
        $this->time = $time;
        $this->applyFilters();
    }

    public function setAirline($value)
    {
        // if ($key = array_search($value, $this->airline, true)) {
        //     unset($this->airline[$key]);
        // } else {
        //     $this->airline[] = $value;
        // }

        $this->addOrRemoveFromArray($this->airline,$value);

        // dd($this->airline);
        $this->applyFilters();
    }
    public function applyFilters()
    {
        $this->dispatch('set-filters', [
            'price' => $this->price,
            'time' => $this->time,
            'airlines' => $this->airline
        ]);
    }

    function addOrRemoveFromArray(&$array, $value) {
        $key = array_search($value, $array); // Check if the value exists in the array

        if ($key === false) {
            // If the value doesn't exist, add it to the array
            $array[] = $value;
        } else {
            // If the value exists, remove it from the array
            unset($array[$key]);
        }
    }

}
