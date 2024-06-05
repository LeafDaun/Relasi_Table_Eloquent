<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Jurusan::create([
            'nama_jurusan' => 'Teknik Informatika'
        ]);
        \App\Models\Jurusan::create([
            'nama_jurusan' => 'Manajemen Informatika'
        ]);
        \App\Models\Jurusan::create([
            'nama_jurusan' => 'Komputer Sains'
        ]);
        \App\Models\Jurusan::create([
            'nama_jurusan' => 'Bisnis Komputer'
        ]);
        \App\Models\Jurusan::create([
            'nama_jurusan' => 'Ekonomi Akuntasi'
        ]);
        \App\Models\Jurusan::create([
            'nama_jurusan' => 'Hukum Perdata'
        ]);

    //==========================================================
        \App\Models\Mahasiswa::create([
            'nama' => 'Hemly Daun',
            'alamat' => 'motoboi kecil',
            'jurusan_id' => 1,
        ]);
        \App\Models\Mahasiswa::create([
            'nama' => 'Susan damopolii',
            'alamat' => 'motoboi kecil',
            'jurusan_id' => 2,
        ]);
        \App\Models\Mahasiswa::create([
            'nama' => 'Stela mangkey',
            'alamat' => 'bitung',
            'jurusan_id' => 3,
        ]);
        \App\Models\Mahasiswa::create([
            'nama' => 'robby tumewu',
            'alamat' => 'jakarta',
            'jurusan_id' => 1,
        ]);
        \App\Models\Mahasiswa::create([
            'nama' => 'ferly manopo',
            'alamat' => 'bitung',
            'jurusan_id' => 4,
        ]);

    //==============================================

        \App\Models\MataKuliah::create([
            'mata_kuliah' => 'Matematika'
        ]);
        \App\Models\MataKuliah::create([
            'mata_kuliah' => 'Kalkulus'
        ]);
        \App\Models\MataKuliah::create([
            'mata_kuliah' => 'Bahasa Inggris'
        ]);
        \App\Models\MataKuliah::create([
            'mata_kuliah' => 'Pancasila'
        ]);
        \App\Models\MataKuliah::create([
            'mata_kuliah' => 'PPKN'
        ]);
    }
}
