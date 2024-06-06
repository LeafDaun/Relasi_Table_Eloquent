<?php

namespace App\Livewire;

use App\Models\Jurusan;
use Livewire\Component;
use App\Models\Mahasiswa;

class ShowMahasiswa extends Component
{
    public $jurusanID;
    public $mahasiswaID; 
    
    public function updatedjurusanID()
    {
        // return $this->jurusanID;
    }

    public function render()
    {
        return view('livewire.show-mahasiswa', [
            'mahasiswa' => Mahasiswa::all(),
            'combo_jurusan' => Jurusan::all(),
            'jurusan' => Jurusan::find($this->jurusanID),
            
        ]);
    }
}
