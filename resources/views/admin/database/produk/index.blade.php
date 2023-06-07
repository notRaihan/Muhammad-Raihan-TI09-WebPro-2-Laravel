@extends('admin.layouts.app')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Produk Table
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Stok</th>
                        <th>Minimal Stok</th>
                        <th>Deskripi</th>
                        <th>Kategori Produk</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Stok</th>
                        <th>Minimal Stok</th>
                        <th>Deskripi</th>
                        <th>Kategori Produk</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($produk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->harga_jual }}</td>
                            <td>{{ $item->harga_beli }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->min_stok }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->kategori }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
