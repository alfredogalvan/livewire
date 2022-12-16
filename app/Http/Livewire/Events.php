<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Events extends Component
{

    public $count = 0;
    public $count2 = 0;

    public function increment()
    {
        $this->count++;
    }


    public function browserEventTest()
    {
        return $this->dispatchBrowserEvent('show-alert', [
            'icon' => 'error',
            'title' => 'Some title',
            'text' => 'This is a pritty lorem ipsum.',
        ]);
    }

    public function render()
    {
        return view('livewire.events');
    }
}
