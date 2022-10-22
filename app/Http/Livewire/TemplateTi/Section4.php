<?php

namespace App\Http\Livewire\TemplateTi;

use App\Models\UserTransfer;
use Livewire\Component;

class Section4 extends Component
{
    public $nama, $nama_pemilik, $pesan, $nominal;


    protected $rules = [
        'nama' => 'required|min:3',
        'nama_pemilik' => 'required|min:3',
        'pesan' => 'required|min:6',
        'nominal' => 'required|min:4',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.template-ti.section4');
    }
    public function submitHandler()
    {
        $this->validate();
        $user = UserTransfer::create([
            'nama' => $this->nama,
            'atas_nama' => $this->nama_pemilik,
            'pesan' => $this->pesan,
            'nominal' => $this->nominal,
            'undangan' => 'guntur',
        ]);
        // dd($user);
        $this->info();
        $this->nama = '';
        $this->nama_pemilik = '';
        $this->pesan = '';
        $this->nominal = '';
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
