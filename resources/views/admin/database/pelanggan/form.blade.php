@extends('admin.layouts.app')
@section('content')
    <div class="card m-3 p-3">
        <h2>Form Create Pelanggan</h2>
        <form action="{{ route('pelanggan.store') }}" method="post" class="m-2">
            @csrf
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" name="kode" id="kode" class="form-control" placeholder="Masukkan Kode">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tmp_lahir">Tempat Lahir</label>
                <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control"
                    placeholder="Masukkan Tempat Lahir">
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"
                    placeholder="Masukkan Tanggal Lahir">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email">
            </div>
            <div class="form-group mb-3">
                <label for="kartu_id">Jenis Kartu</label>
                <select name="kartu_id" id="kartu_id" class="form-control">
                    @foreach ($kartu as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-danger">Batal</a>
        </form>
    </div>
@endsection
