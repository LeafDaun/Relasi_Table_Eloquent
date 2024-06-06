<div>
    <h3>Table One to Many</h3>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->alamat }}</td>
                <td>{{ $mhs->jurusan->nama_jurusan }}</td>
            </tr>
        @endforeach
    </table>
    <br>

         <div class="mb-3 float-start">
                <select wire:model.live="jurusanID"  class="form-select">
                    <option selected>-->pilih<--</option>

                    @foreach ($combo_jurusan as $jurus)
                        <option value="{{ $jurus->id }}">{{ $jurus->nama_jurusan }}</option>
                    @endforeach
        
                </select>
            </div>

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            
        </tr>
        @isset($jurusan->mahasiswa)
            @foreach ($jurusan->mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>{{ $mhs->jurusan->nama_jurusan }}</td>
                </tr>
            @endforeach
        @endisset
    </table>
</div>
