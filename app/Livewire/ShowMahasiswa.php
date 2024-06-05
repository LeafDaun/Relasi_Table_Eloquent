<?php

namespace App\Livewire;

use App\Models\Jurusan;
use Livewire\Component;
use App\Models\Mahasiswa;

class ShowMahasiswa extends Component
{
    public function render()
    {
        return view('livewire.show-mahasiswa', [
            'mahasiswa' => Mahasiswa::all(),
            'jurusan' => Jurusan::findorfail(1)
        ]);
    }
}
