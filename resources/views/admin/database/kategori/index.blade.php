@extends('admin.layouts.app')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Kategori Produk Table
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($kategori as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
