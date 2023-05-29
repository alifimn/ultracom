@extends('layouts.default')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Foto Barang') }}</div>

                <div class="card-body">
                    <form action="{{ route('product-galleries.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name" class="form-control-label">{{ __('Nama Barang') }}</label>
                            <input type="text" name="name" class="form-control" value="{{ $item->product->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="photo" class="form-control-label">{{ __('Foto Barang') }}</label>
                            <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                            @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                             <label for="is_default" class="form-control-label">Jadikan Default</label>
                                <br>
                                <label class="m-3 form-check-label">
                                <input  type="radio"
                                        name="is_default" 
                                        value="1" 
                                        class="form-check-input @error('is_default') is-invalid @enderror"/> Ya
                                </label>
                            &nbsp;
                            <label class="m-3 form-check-label" >
                                <input  type="radio"
                                        name="is_default" 
                                        value="0" 
                                        class="form-check-input @error('is_default') is-invalid @enderror"/> Tidak
                            </label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">{{ __('Simpan Perubahan') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
