@extends('admin.layouts.app')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Pesanan Table
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Hp</th>
                        <th>Email</th>
                        <th>Jumlah</th>
                        <th>Deskripsi</th>
                        <th>Produk</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Hp</th>
                        <th>Email</th>
                        <th>Jumlah</th>
                        <th>Deskripsi</th>
                        <th>Produk</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($pesanan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->nama_pemesan }}</td>
                            <td>{{ $item->alamat_pemesan }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->jumlah_pesanan }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->produk }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
