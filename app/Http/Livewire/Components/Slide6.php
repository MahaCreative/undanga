<?php

namespace App\Http\Livewire\Components;

use Carbon\Carbon;
use Livewire\Component;
use Spatie\GoogleCalendar\Event;

class Slide6 extends Component
{
    public function render()
    {
        return view('livewire.components.slide6');
    }
    public function saveDate()
    {
        $event = new Event;

        $event->name = 'A new event';
        $event->startDateTime = Carbon::now();
        $event->endDateTime = Carbon::now()->addHour();

        $event->save();
    }
}
