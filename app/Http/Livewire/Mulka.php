<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Mulka extends Component
{
    public $undangan = null;
    public function render()
    {
        // dd($this->undangan);
        return view('livewire.srimulka', ['tamu' => $this->undangan]);
    }
}
