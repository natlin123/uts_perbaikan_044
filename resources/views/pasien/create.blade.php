@extends('layouts.master')

@section('title', 'Tambah Pasien')

@section('content')

<h3>Tambah Pasien</h3>

<form action="{{ route('pasien.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>No Rekam Medis</label>
        <input type="text" name="no_rekam_medis" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Nama Pasien</label>
        <input type="text" name="nama_pasien" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Umur</label>
        <input type="number" name="umur" class="form-control" required>
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>

</form>

@endsection
