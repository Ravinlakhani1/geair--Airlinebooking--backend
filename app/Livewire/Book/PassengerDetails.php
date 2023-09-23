<?php

namespace App\Livewire\Book;

use Livewire\Component;

class PassengerDetails extends Component
{

    public $pessenger_count = 1;

    protected $queryString = [
        'pessenger_count' => ['except' => '', 'as' => 'p']
    ];



    public function render()
    {
        return view('livewire.book.passenger-details');
    }
}
