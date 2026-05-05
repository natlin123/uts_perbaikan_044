@extends('layouts.master')

@section('title', 'Edit Pasien')

@section('content')

<h3>Edit Pasien</h3>

<form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>No Rekam Medis</label>
        <input type="text" name="no_rekam_medis" value="{{ $pasien->no_rekam_medis }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Nama Pasien</label>
        <input type="text" name="nama_pasien" value="{{ $pasien->nama_pasien }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
            <option {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Umur</label>
        <input type="number" name="umur" value="{{ $pasien->umur }}" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
</form>

@endsection
