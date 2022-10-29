<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Guntur extends Component
{
    public $undangan;
    public function mount($undangan)
    {
    }
    public function render()
    {

        return view('livewire.template-ti.home', ['tamu' => $this->undangan])->layout('layouts.template_ti');
    }
}
