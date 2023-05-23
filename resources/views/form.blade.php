<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex align-items-center vh-100">
        <div class="container">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama: </label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="tgl_pemeriksaan" class="form-label">Tanggal Pemeriksaan: </label>
                    <input type="date" class="form-control" id="tgl_pemeriksaan">
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal lahir: </label>
                    <input type="date" class="form-control" id="tgl_lahir">
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin: </label>
                        <select class="form-select" name="gender" id="gender">
                            <option selected disabled>Select one</option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="table-responsive mt-4">
                <table class="table	align-middle table-bordered">
                    <thead>
                        <tr>
                            <th>Jenis Tes</th>
                            <th>Hasil Pemeriksaan</th>
                            <th>Normal</th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr >
                                <td>Tekanan darah</td>
                                <td></td>
                                <td>120/80 mmhg</td>
                            </tr>
                            <tr>
                                <td>Asam Urat</td>
                                <td></td>
                                <td><sub>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</sub></td>
                            </tr>
                            <tr>
                                <td>Kolesterol total</td>
                                <td></td>
                                <td>< 200 mg/dl</td>
                            </tr>
                            <tr>
                                <td rowspan="3">Gula darah</td>
                                <td rowspan="3"></td>
                                <td>Puasa: 70-110 mg/dl</td>
                            </tr>
                            <tr>
                                <td><sub>2 jam setelah makan: 100-150 mg/dl</sub></td>
                            </tr>
                            <tr>
                                <td>Sewaktu/acak : 70-125 mg/dl</td>
                            </tr>
                        </tbody>
                </table>
            </div>
            
        </div>
    </div>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

