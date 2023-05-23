<table class="table table-bordered">
    <tr>
        <th>ID Servie</th>
        <td>{{ $item->id_service }}</td>
    </tr>
    <tr>
        <th>ID User</th>
        <td>{{ $item->id }}</td>
    </tr>
    <tr>
        <th>Kategori</th>
        <td>{{ $item->nama_kategori }}</td>
    </tr>
    <tr>
        <th>Jumlah</th>
        <td>{{ $item->jml_service }}</td>
    </tr>
    <tr>
        <th>Catatan</th>
        <td>{{ $item->catatan_service }}</td>
    </tr>
    <tr>
        <th>Pembayaran</th>
        <td>{{ $item->metode_pembayaran }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>{{ $item->status }}</td>
    </tr>
</table>
</div>
