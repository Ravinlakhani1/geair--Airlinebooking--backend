<?php

namespace App\Livewire\Flight;

use App\Models\City;
use Livewire\Component;

class Search extends Component
{
    public $from_city_list = [];
    public $to_city_list = [];

    public $from = '';
    public $to = '';

    public $from_id = '';
    public $to_id = '';

    public function render()
    {
        return view('livewire.flight.search');
    }


    public function updatedFrom()
    {
        $this->from_city_list = City::where('name', 'like', '%' . $this->from . '%')->latest()->limit(5)->get();
    }
    public function updatedTo()
    {
        $this->to_city_list = City::where('name', 'like', '%' . $this->to . '%')->latest()->limit(5)->get();
    }

    public function setFrom($id, $name)
    {
        $this->from_id  = $id;
        $this->from =  $name;
        $this->from_city_list = [];
    }

    public function setTo($id, $name)
    {
        $this->to_id  = $id;
        $this->to = $name;
        $this->to_city_list = [];
    }
}
