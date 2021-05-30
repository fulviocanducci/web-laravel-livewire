<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        $this->counter ++;
    }

    public function decrement()
    {
        $this->counter --;
    }
}

