@extends('layouts.app')

@section('content')
    <section class="pt-24 pl-8 md:pl-64 px-8 container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-5 fw-bold">Menambah Transaksi Baru</h1>
        </div>
        <form action="{{ route('store_transaksi') }}" method="GET" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="pengguna_id" class="form-label">Pengguna</label>
                <select id="pengguna_id" name="pengguna_id" class="form-select" required>
                    <option value="">Pilih pengguna</option>
                    @foreach ($user as $use)
                        <option value="{{ $use->id }}">{{ $use->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="playstation_id" class="form-label">Playstation</label>
                <select id="playstation_id" name="playstation_id" class="form-select" required>
                    <option value="">PlayStation 0</option>
                    @foreach ($playstation as $play)
                        <option value="{{ $play->id }}">{{ $play->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="">
            </div>
            <div class="mb-3">
                <label for="durasiBermain" class="form-label">Durasi Bermain</label>
                <input type="number" class="form-control" id="durasiBermain" name="durasiBermain"
                    value="">
            </div>
            <div class="mb-3">
                <label for="jumlahOrang" class="form-label">Jumlah Orang</label>
                <input type="number" class="form-control" id="jumlahOrang" name="jumlahOrang"
                    value="">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </section>
@endsection
