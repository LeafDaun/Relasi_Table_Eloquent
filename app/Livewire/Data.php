<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Mahasiswa;

class Data extends Component
{
    public function render()
    {
        return view('livewire.data', [
            'mahasiswa' => Mahasiswa::with('matakuliah')->get(),
            
        ]);
    }
}
