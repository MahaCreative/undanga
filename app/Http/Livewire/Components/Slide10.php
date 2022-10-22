<?php

namespace App\Http\Livewire\Components;

use App\Models\PesanDoa;
use Livewire\Component;

class Slide10 extends Component
{
    public $nama, $pesan, $pesanDoa;

    public function render()
    {
        $this->pesanDoa = PesanDoa::where('undangan', 'mulka')->latest()->limit(10)->get();
        return view('livewire.components.slide10');
    }

    public function submitHandler()
    {
        $this->pesanDoa = PesanDoa::create([
            'undangan' => 'mulka',
            'nama' => $this->nama,
            'pesan' => $this->pesan
        ]);

        $this->info();
        $this->pesan = '';
        $this->nama = '';
    }
    public function info()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => 'Berhasil',
            'text' => ''
        ]);
    }
}
