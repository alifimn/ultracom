@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Service</strong>
            <small>{{ $item->nama_kategori }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('services.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama_kategori" class="form-control-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori"
                        value="{{ old('nama_kategori') ? old('nama_kategori') : $item->nama_kategori }}"
                        class="form-control @error('nama_kategori') is-invalid @enderror" />
                    @error('nama_kategori')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type" class="form-control-label">Jumlah</label>
                    <input type="text" name="jml_service"
                        value="{{ old('jml_service') ? old('jml_service') : $item->jml_service }}"
                        class="form-control @error('jml_service') is-invalid @enderror" />
                    @error('jml_service')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="form-control-label">Catatan</label>
                    <input type="text" name="catatan_service"
                        value="{{ old('catatan_service') ? old('catatan_service') : $item->jml_service }}"
                        class="form-control @error('catatan_service') is-invalid @enderror" />
                    @error('catatan_service')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-control-label">Pembayaran</label>
                    <input type="text" name="metode_pembayaran"
                        value="{{ old('metode_pembayaran') ? old('metode_pembayaran') : $item->metode_pembayaran }}"
                        class="form-control @error('metode_pembayaran') is-invalid @enderror" />
                    @error('metode_pembayaran')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="quantity" class="form-control-label">Status</label>
                    <input type="text" name="status" value="{{ old('status') ? old('status') : $item->status }}"
                        class="form-control @error('status') is-invalid @enderror" />
                    @error('status')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Service
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
