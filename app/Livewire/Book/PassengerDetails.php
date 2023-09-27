<?php

namespace App\Livewire\Book;

use App\Models\Flight;
use Livewire\Component;

class PassengerDetails extends Component
{

    public $pessenger_count = 1;
    public $booking_total;
    public $tax_total;
    public $sub_total;
    public $discunt = 0;
    public $total;
    public $flight;

    public $email;
    public $mobile;
    protected $queryString = [
        'pessenger_count' => ['except' => '', 'as' => 'p']
    ];

    public $pessenger = [];

    public function mount($id)
    {
        $this->flight = Flight::find($id);
        $this->booking_total = $this->flight->price * $this->pessenger_count;
        $this->tax_total = ($this->booking_total * 7) / 100;
        $this->sub_total = $this->booking_total + $this->tax_total;
        $this->total = $this->sub_total - $this->discunt;


        
        $this->pessenger = [];
        for ($i = 0; $i < $this->pessenger_count; $i++) {
            $this->pessenger[$i] = [
                'first_name' => '',
                'last_name' => '',
                'gender' => '',
            ];
        }
    }

    public function render()
    {
        return view('livewire.book.passenger-details');
    }

    public function savePessenger(){
        dd($this->pessenger,$this->email,$this->mobile);
    }

    public function setPessenger($index, $key, $val)
    {
        $this->pessenger[$index][$key] = $val;
    }
}
