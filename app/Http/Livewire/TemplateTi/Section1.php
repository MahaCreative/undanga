<?php

namespace App\Http\Livewire\TemplateTi;

use Carbon\Carbon;
use Livewire\Component;

class Section1 extends Component
{
    public $tanggal;

    public function render()
    {
        $this->tanggal = Carbon::parse("2022-10-20 11:41:60");

        return view('livewire.template-ti.section1');
    }
}
