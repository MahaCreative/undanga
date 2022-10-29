<?php

namespace App\Http\Livewire\TemplateTi;

use Carbon\Carbon;
use Livewire\Component;

class Section1 extends Component
{
    public $tanggal;

    public function render()
    {
        $this->tanggal = Carbon::parse("2022-11-13 10:00:00");


        return view('livewire.template-ti.section1');
    }
}
