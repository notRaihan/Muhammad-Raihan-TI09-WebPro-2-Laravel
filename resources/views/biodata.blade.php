<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="d-flex align-items-center">
    <!-- form validasi -->
    <div class="container border w-50">
        <h1 class="text-center py-3">Form Biodata</h1>
        <form action="{{ url('hasil') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control"
                        value="{{ old('nama') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lokasi" class="col-4 col-form-label">Lokasi</label>
                <div class="col-8">
                    <select class="custom-select" name="lokasi" id="lokasi">
                        <option selected disabled>Select one</option>
                        @foreach ($lokasi as $l)
                            <option value="{{ $l }}">{{ $l }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="radio_0" type="radio" class="custom-control-input"
                            value="laki-laki">
                        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="radio_1" type="radio" class="custom-control-input"
                            value="perempuan">
                        <label for="radio_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 col-form-label">Skill</label>
                <div class="col-8">
                    @foreach ($skill as $s)
                        <div class="d-block">
                            <input class="form-check-input" name="skill[]" id="skill" type="checkbox"
                                value="{{ $s }}"> {{ $s }}
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger mb-0">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif <br />
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
