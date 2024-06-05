<div>
    
    <h3>Table Many to Many</h3>

    <table class="table table-striped">
        <tr>
            <th>No</th><th>Nama</th><th>Jurusan</th><th>Pelajaran</th>
        </tr>
        @foreach($mahasiswa as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->jurusan->nama_jurusan }}</td>
                <td>
                    <ul>
                        @foreach($mhs->mataKuliah as $mkl)
                            <li>{{ $mkl->mata_kuliah }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </table>

</div>
