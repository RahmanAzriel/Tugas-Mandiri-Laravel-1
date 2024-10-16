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
            Tambah Data Siswa
        </div>
        <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Siswa" max="100">
                </div>
                <!-- NIS -->
                <div class="mb-3">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" max="8">
                </div>
                <!-- NISN -->
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN" max="10">
                </div>
                <!-- Jenis Kelamin -->
                <div class="mb-3">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jk" name="jk" required>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <!-- Umur -->
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan Umur">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jurusan</label>
                    <select class="form-select" id="jurusan" name="jurusan">
                        <option selected>Pilih Jurusan</option>
                        <option value="PPLG">PPLG</option>
                        <option value="DKV">DKV</option>
                        <option value="TJKT">TJKT</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
