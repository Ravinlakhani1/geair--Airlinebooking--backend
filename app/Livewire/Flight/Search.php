<?php

namespace App\Livewire\Flight;

use App\Models\City;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Search extends Component
{
    public $route;

    public $from_city_list = [];
    public $to_city_list = [];

    public $from = '';
    public $to = '';

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

    public function __construct()
    {
        $this->route = Route::currentRouteName();
    }

    public function mount()
    {
        if ($this->from_id) {
            $this->from = City::find($this->from_id)->name;
        }
        if ($this->to_id) {
            $this->to = City::find($this->to_id)->name;
        }
    }

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

    public function submit()
    {
        $data = [
            'f' => $this->from_id,
            't' => $this->to_id,
            'ty' => $this->type ?? 'all',
            'td' => $this->t_date,
            'p' => $this->p ?? 1
        ];

        if ($this->route == 'web.home') {
            return redirect()->route('web.booking', $data);
        }

        $this->dispatch('searchDetails', $data);
    }
}
