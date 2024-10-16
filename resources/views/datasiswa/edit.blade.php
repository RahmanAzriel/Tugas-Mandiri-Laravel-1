<!-- resources/views/siswa/create.blade.php -->
@extends('datasiswa.layout')


@section('content')
@if ($errors->any())
        <script>
            alert("{{ $errors->first() }}");
        </script>

    @endif
    <div class="card mt-4">
        <div class="card-header bg-success text-white">
            Edit Data Siswa
        </div>
        <div class="card-body">
            <form action="{{ route('siswa.update' , $data_siswa['id']) }}" method="POST">
                @csrf
                @method('PATCH')
                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Siswa" max="100" value="{{ $data_siswa['nama'] }}">
                </div>
                <!-- NIS -->
                <div class="mb-3">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" max="8" value="{{ $data_siswa['nis'] }}">
                </div>
                <!-- NISN -->
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN" max="10" value="{{ $data_siswa['nisn'] }}">
                </div>
                <!-- Jenis Kelamin -->
                <div class="mb-3">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jk" name="jk" required>
                        <option value="L"{{ $data_siswa['jk'] == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $data_siswa['jk'] == 'P' ? 'selected' : ''}}>Perempuan</option>
                    </select>
                </div>
                <!-- Umur -->
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan Umur" value="{{ $data_siswa['umur'] }}">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jurusan</label>
                    <select class="form-select" id="jurusan" name="jurusan">
                        <option selected>Pilih Jurusan</option>
                        <option value="PPLG" {{ $data_siswa['jurusan'] == 'PPLG' ? 'selected' : ''}}>PPLG</option>
                        <option value="DKV" {{ $data_siswa['jurusan'] == 'DKV' ? 'selected' : '' }}>DKV</option>
                        <option value="TJKT" {{ $data_siswa['jurusan'] == 'TJKT' ? 'selected' : '' }}>TJKT</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
