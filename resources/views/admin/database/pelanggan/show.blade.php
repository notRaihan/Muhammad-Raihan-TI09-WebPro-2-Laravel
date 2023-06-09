@extends('admin.layouts.app')
@section('content')
    @extends('admin.layouts.app')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <h3>Data Pelanggan #{{ $pelanggan->id }}</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{ $pelanggan->id }}</td>
                    </tr>
                    <tr>
                        <td>Kode</td>
                        <td>{{ $pelanggan->kode }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>{{ $pelanggan->nama }}</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>{{ $pelanggan->jk }}</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>{{ $pelanggan->tmp_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>{{ $pelanggan->tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $pelanggan->email }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kartu</td>
                        <td>{{ $pelanggan->kartu->nama }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@endsection
