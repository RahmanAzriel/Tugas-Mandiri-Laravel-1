@extends('datasiswa.layout')
@section('content')

<!-- resources/views/siswa/index.blade.php -->

@section('title', 'Daftar Data Siswa')

@section('content')
    <div class="card mt-4">
        <div class="card-header bg-primary text-white">
            Daftar Guru
        </div>
        <div class="card-body">
            <div class="row">
                @forelse ($guru as $index => $item)
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm border-light rounded">
                            <div class="card-header text-center bg-light">
                                <h5 class="mb-0">{{ $item['nama'] }}</h5>
                            </div>
                            <div class="card-body text-center">
                                <img src="https://via.placeholder.com/100" alt="Profil" class="rounded-circle mb-2" />
                                <h5 class="card-title">NIP: {{ $item['nip'] }}</h5>
                                <p class="card-text">
                                    Jabatan: {{ $item['jabatan'] }}<br>
                                    Jenis Mata Pelajaran: {{ $item['mapel'] }}<br>
                                </p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="{{ route('guru.edit', $item['id']) }}" class="btn btn-primary" style="width: 80px;">Edit</a>
                                    <form action="{{ route('guru.destroy', $item['id']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="width: 80px;">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-warning text-center">No Data</div>
                    </div>
                @endforelse
            </div>
            <div class="d-flex justify-content-end">
                {{ $guru->links() }}
            </div>
        </div>
    </div>
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
@endpush

<style>

    .card-header {
        background-color: #007bff;
        color: white;
    }
    .btn {
        height: 38px; /* Memastikan tinggi tombol seragam */
    }
</style>
