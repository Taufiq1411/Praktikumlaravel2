@extends ('mahasiswas.layout')

@section('content')
    <div class="row">
        <div class="col-19-12 margin-tb">
            <div class="pull-left">
                <H2>Data Karyawan</H2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Tambah Mahasiswa</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <form action="{{ url(->current() }}">
            <div class="pull-right">
                <H6>Nama &nbsp;</H6>
                <input class="typeahead form-control" type="text" name="nama">
                <button type="submit" class="btn btn-primary">
                    Cari
                </button>
                <a class="btn btn-success" href="{{ route('mahasiswas, index') }}">reset</a>
            </div>
            </form>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class ="table table-bordered table-striped ">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Kode Tugas</th>
            <th>Gaji Pokok</th>
            <th>Lembur</th>
            <th>Tunjangan Jabatan</th>
            <th>Tunjangan Anak</th>
            <th width="28px">Action</th>
        </tr>
        </thead>
        @foreach ($mahasiswas as $karyawan)
        <tr>
            <td>{{ $karyawan->id }}</td>
            <td>{{ $karyawan->nama )}</td>
            <td>{{ $karyawan->jabatan }}</td>
            <td>{{ $karyawan->kd_tugas }}</td>
            <td>{{ $karyawan->gapok }}</td>
            <td>{{ $karyawan->lembur }}</td>
            <td>{{ $karyawan->tj_jabatan }}</td>
            <td>{{ $karyawan->tj_anak }}</td>
            <td>
                <form action="{{ route('mahasiswas.destroy', $karyawan->id) }}" method="POST">
                    <!-- <a class="btn btn-info" href="{{ routel 'mahasiswas. show'. Skaryawan->id) })">Show</a> 
                    <a class="btn btn-primary" href="{{ route('mahasiswas.edit',Skaryawan('id') }}">Edit</a>
                    @csrf
                    @method ('DELETE')
                    <button type="submit" onclick="return confirm( 'Apakah Data yakin dihapus?')" class="btn b
                </form>
            </td>
        </tr>
        @endforeach
        </table>

        {! $mahasiswas->links() !!}
    @endsection
