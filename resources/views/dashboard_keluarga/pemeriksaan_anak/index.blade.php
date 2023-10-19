@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nmanak">Nama Anak</label>
      <input type="text" class="form-control" id="Nmanak" placeholder="Nama Anak">
    </div>
    <div class="form-group col-md-6">
      <label for="Nmor">Nama Orang Tua</label>
      <input type="password" class="form-control" id="Nmor" placeholder="Nama Orang Tua">
    </div>
  </div>
    <div class="form-group col-md-4">
    @foreach($pemeriksaan_anak as $pa)
      <label for="inputState">Jenis Kelamin</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Laki - Laki</option>
        <option>Perempuan</option>
        @endforeach
      </select>
    </div>
  </div>
  <!-- <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        data sudah benar
      </label>
    </div>
  </div> -->
  <button type="submit" class="btn btn-primary" form="data-anak">Submit</button>
@endsection

<script type="module">
        $('.table').DataTable();

        /*-------------------------- TAMBAH DATA -------------------------- */
        $('#data-anak').on('submit', function (e) {
            e.preventDefault();
            let data = new FormData(e.target);
            console.log(Object.fromEntries(data))
            axios.post('/dashboard_keluarga/pemeriksaan_anak', data, {
                'Content-Type': 'multipart/form-data'
            })
                .then((res) => {
                    $('#Nmanak').css('display', 'none')
                    swal.fire('Berhasil tambah data!', '', 'success').then(function () {
                        location.reload();
                    })
                })
                .catch((err) => {
                    swal.fire('Gagal tambah data!', '', 'warning');
                    console.log(err)
                });
        })
</script>
</form>
</body>
</html>