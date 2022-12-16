<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;

class LoadMore extends Component
{

    public $paginate = 30;

    public function increment()
    {
        $this->paginate += 30;
    }

    public function render()
    {
        return view('livewire.load-more', [
            'cities' => City::with(['state', 'state.country'])->get()->take($this->paginate)
        ]);
    }
}
