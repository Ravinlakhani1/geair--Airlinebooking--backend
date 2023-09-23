<?php

namespace App\Livewire\Book;

use App\Models\Flight;
use Livewire\Component;

class Info extends Component
{
    public $flight;
    public $pessenger_count = 1;
    public $booking_total;
    public $tax_total;
    public $sub_total;
    public $discunt = 0;
    public $total;

    protected $queryString = [
        'pessenger_count' => ['except' => '', 'as' => 'p']
    ];



    public function mount($id)
    {
        $this->flight = Flight::find($id);
        $this->booking_total = $this->flight->price * $this->pessenger_count;
        $this->tax_total = ($this->booking_total * 7) / 100;
        $this->sub_total = $this->booking_total + $this->tax_total;
        $this->total = $this->sub_total - $this->discunt;
    }

    public function render()
    {
        return view('livewire.book.info');
    }

    // public function
}
