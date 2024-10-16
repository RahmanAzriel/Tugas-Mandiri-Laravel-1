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
            <form action="{{ route('guru.update', $guru['id']) }}" method="POST">
                @csrf
                @method('PATCH')
                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Guru</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Guru" max="100" value="{{ $guru['nama'] }}">
                </div>
                <!-- NIS -->
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" max="8" value="{{ $guru['nip'] }}">
                </div>
                <!-- NISN -->
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan" value="{{ $guru['jabatan'] }}">
                </div>
                <!-- Jenis Mapel -->
                <div class="mb-3">
                    <label for="jenis_mapel" class="form-label">Jenis Mapel</label>
                    <select class="form-select" id="mapel" name="mapel">
                        <option selected>Pilih Mapel</option>
                        <option value="IPA" {{ $guru['mapel'] == 'IPA' ? 'selected' : '' }}>IPA</option>
                        <option value="IPS" {{ $guru['mapel'] == 'IPS' ? 'selected' : ''  }}>IPS</option>
                        <option value="Bahasa Indonesia" {{ $guru['mapel'] == 'Bahasa Indonesia' ? 'selected' : ''  }} >Bahasan Indonesia</option>
                        <option value="Bahasa Inggris" {{ $guru['mapel'] == 'Bahasa Inggris' ? 'selected' : '' }}>Bahasa Inggris</option>
                        <option value="PROD" {{ $guru['mapel'] == 'PROD' ? 'selected' : '' }}>PROD</option>
                        <option value="MTK" {{ $guru['mapel'] == 'MTK' ? 'selected' : '' }}>MTK</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
