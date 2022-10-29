<?php

namespace App\Http\Livewire\Components;

use Carbon\Carbon;
use Livewire\Component;

class Slide3 extends Component
{
    public $tanggal;
    public function render()
    {
        $this->tanggal = Carbon::parse("2022-11-13 10:00:00");
        return view('livewire.components.slide3');
    }
}
