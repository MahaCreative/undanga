<?php

namespace App\Http\Livewire\TemplateTi;

use App\Models\PesanDoa;
use Livewire\Component;

class Section6 extends Component
{
    public $nama, $pesan, $pesanDoa;
    protected $rules = [
        'nama' => 'required|min:3',
        'pesan' => 'required|min:6',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        $this->pesanDoa = PesanDoa::where('undangan', 'guntur')->latest()->limit(10)->get();
        return view('livewire.template-ti.section6');
    }
    public function submitHandler()
    {
        $this->pesanDoa = PesanDoa::create([
            'undangan' => 'guntur',
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
