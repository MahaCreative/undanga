<?php

namespace App\Http\Livewire\TemplateTi;

use Carbon\Carbon;
use Livewire\Component;

class Home extends Component
{

    public function render()
    {

        return view('livewire.template-ti.home')->layout('layouts.template_ti');
    }
}
