<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <td>{{ $data->lokasi }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td>Skills</td>
                                <td>
                                    @php
                                        // Check if variable $skill is an array or not.
                                        if (is_array($data->skill)) {
                                            $ar_skill = $data->skill;
                                            // giving a comma after each skill
                                            echo implode(', ', $ar_skill);
                                        } else {
                                            // just print out. if only one, so there won't be a comma
                                            echo $data->skill;
                                        }
                                    @endphp
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
