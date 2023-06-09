@extends('admin.layouts.app')
@section('content')
    <div class="card m-3 p-3">
        <h2>Form Update Pelanggan ID: #{{ $pelanggan->id }}</h2>
        <form action="{{ route('pelanggan.update') }}" method="post" class="m-2">
            @csrf
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" name="kode" id="kode" class="form-control" placeholder="Masukkan Kode"
                    value="{{ $pelanggan->kode }}">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama"
                    value="{{ $pelanggan->nama }}">
            </div>
            <div class="form-group">
                @php
                    $jk_l = $pelanggan->jk == 'L' ? 'checked' : '';
                    $jk_p = $pelanggan->jk == 'P' ? 'checked' : '';
                @endphp
                <label for="jk">Jenis Kelamin</label>
                <div class="d-flex gap-3 mt-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="L" id="jk_l" name="jk"
                            {{ $jk_l }}>
                        <label class="form-check-label" for="jk_l">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="P" id="" name="jk"
                            {{ $jk_p }}>
                        <label class="form-check-label" for="jk_p">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="tmp_lahir">Tempat Lahir</label>
                <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control"
                    placeholder="Masukkan Tempat Lahir" value="{{ $pelanggan->tmp_lahir }}">
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"
                    placeholder="Masukkan Tanggal Lahir" value="{{ $pelanggan->tgl_lahir }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email"
                    value="{{ $pelanggan->email }}">
            </div>
            <div class="form-group mb-3">
                <label for="kartu_id">Jenis Kartu</label>
                <select name="kartu_id" id="kartu_id" class="form-control">
                    @foreach ($kartu as $item)
                        @php $selected = ($pelanggan->kartu_id == $item->id) ? 'selected' : ''; @endphp
                        <option value="{{ $item->id }}" {{ $selected }}>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="idedit" value="{{ $pelanggan->id }}">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="route('pelanggan')" class="btn btn-danger">Batal</a>
        </form>
    </div>
@endsection
