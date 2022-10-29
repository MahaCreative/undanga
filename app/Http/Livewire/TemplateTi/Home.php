<?php

namespace App\Http\Livewire\TemplateTi;

use Carbon\Carbon;
use Livewire\Component;

class Home extends Component
{
    public $undangan = null;

    public function render()
    {

        return view('livewire.template-ti.home', ['tamu' => $this->undangan])->layout('layouts.template_ti');
    }
}
