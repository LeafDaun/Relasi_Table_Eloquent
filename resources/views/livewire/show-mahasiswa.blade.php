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
    <h5>Data Jurusan : {{ $jurusan->nama_jurusan }}</h5>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            
        </tr>
        @foreach ($jurusan->mahasiswa as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->alamat }}</td>
                
            </tr>
        @endforeach
    </table>
</div>
