@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Service</h4>
                    </div>
                    <div class="m-3">
                        <form action="" method="get">
                            <div class="input-group">

                                <input type="text" class="form-control" name="keyword">
                                <button class="input-group-text">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Jumlah</th>
                                        <th>Catatan</th>
                                        <th>Pembayaran</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $key => $item)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $item->nama_kategori }}</td>
                                            <td>{{ $item->jml_service }}</td>
                                            <td>{{ $item->catatan_service }}</td>
                                            <td>{{ $item->metode_pembayaran }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <a href="#mymodal" data-remote="{{ route('services.show', $item->id) }}"
                                                    data-toggle="modal" data-target="#mymodal"
                                                    data-title="Detail Service {{ $item->id_service }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('services.edit', $item->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('services.destroy', $item->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5">
                                                Data tidak tersedia
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
