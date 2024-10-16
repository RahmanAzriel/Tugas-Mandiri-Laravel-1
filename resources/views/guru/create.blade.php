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
            <form action="{{ route('guru.store') }}" method="POST">
                @csrf
                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Guru</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Guru" max="100">
                </div>
                <!-- NIS -->
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" max="8">
                </div>
                <!-- NISN -->
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan" >
                </div>
                <!-- Jenis Mapel -->
                <div class="mb-3">
                    <label for="jenis_mapel" class="form-label">Jenis Mapel</label>
                    <select class="form-select" id="mapel" name="mapel">
                        <option selected>Pilih Mapel</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="Bahasa Indonesia">Bahasan Indonesia</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="PROD">PROD</option>
                        <option value="MTK">MTK</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
