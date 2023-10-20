@extends('layouts.layout')
@section('title', 'Data Anak')
@section('content')
    <div class="row">
        <div class="col d-flex justify-content-between mb-2">
            <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
            <a class="btn btn-gradient" href="{{url('/dashboard')}}">
                Kembali</a>
            <button type="button" class="btn bg-c-blue"" data-bs-toggle="modal"
                    data-bs-target="#tambah-data-modal"> Tambah
            </button>
            <!-- Tambah Anak Modal -->
            <div class="modal fade" id="tambah-data-modal" tabindex="-1"
                 aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Anak</h1>
                        </div>
                        <div class="modal-body">
                            <form id="tambah-data-form" enctype="multipart/form-data">
                                <div class="form-group">
                                    @auth
                                        <input type="hidden" name="anak" class="d-none"
                                               value="{{ Auth::user()["data"] }}">
                                    @endauth
                                    <label>Nama</label>
                                    <select name="anak" id="DataAnak" class="form-select mb-3"></select>
                                    <label>NIK</label>
                                    <select name="anak" id="DataAnak" class="form-select mb-3"></select>
                                    <label>Nama Kepala Keluarga</label>
                                    <select name="anak" id="DataAnak" class="form-select mb-3"></select>

                                    <label>Pilih Jenis Kelamin</label>
                                    <select name="anak" id="DataAnak" class="form-select mb-3"></select>
                                        <option selected value="">pilih jenis Kelamin</option>
                                        @foreach($data_anak as $da)
                                            <option value="{{$da->id}}">{{$da->data_anak}}</option>
                                        @endforeach
                                    </select>
                                    <label>Tanggal Lahir</label>
                                    <input type="datetime-local" name="tanggal_lahir" id="tanggalLahir"
                                           class="form-control mb-3">
                                    <label class="d-block">Foto : </label>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-3">
                                            <label for="fileUpload"
                                                   class="btn p-1 w-100 btn-outline-success form-control">Upload
                                                Foto</label>
                                                <input type="file" accept=".pdf, image/*, .txt, .doc, .docx" name="file" id="fotoUpload" class="d-none">
                                        </div>
                                        <div class="col p-0">
                                            <p class="fileName m-0 d-inline-block"></p>
                                        </div>
                                    </div>
                                    @csrf
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="clearText()"
                                    data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-gradient" form="tambah-surat-form">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-hovered DataTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Nama Kepala Keluarga</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>Nama Orang Tua</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat</th>
                            <th>Tinggi Badan</th>
                            <th>Berat Badan</th>
                            <th>Gol.dar</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>Kaylaa</th>
                            <th>123456789</th>
                            <th>saddam</th>
                            <th>perempuan</th>
                            <th>Bekasi, 19 September 2021</th>
                            <th>mega</th>
                            <th>098766725</th>
                            <th>JL. Pemuda</th>
                            <th>-</th>
                            <th>15</th>
                            <th>O</th>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>Naya</th>
                            <th>123456789</th>
                            <th>Nursya'bani</th>
                            <th>perempuan</th>
                            <th>Bekasi, 19 Desember 2021</th>
                            <th>yani</th>
                            <th>098766725</th>
                            <th>JL. Bintara</th>
                            <th>-</th>
                            <th>15</th>
                            <th>O</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        ?>
                        @foreach($data_anak as $a)
                            <tr dataAnak="{{$a->data}}">
                                <td class="col-1">{{$no++}}</td>
                                <td class="col-1">{{$a->nama->nama_anak}}</td>
                                <td class="col-1">{{$a->Keluarga->nama_kepala_keluarga}}</td>
                                <td class="col-2">{{$a->tanggal_lahir}}</td>
                                <td class="col-1">
                                    @if($s->file)
                                        <a class="btn btn-gradient"
                                           href="{{url("dashboard_kader/data_anak?path=$a->file", ['download'])}}">Download</a>
                                    @else
                                        <p>No File</p>
                                    @endif
                                </td>
                                <td class="col-2">
                                    <!-- Button trigger edit -->
                                    <button type="button" class="editBtn btn btn-gradient" data-bs-toggle="modal"
                                            data-bs-target="#edit-modal-{{$a->data}}" dataAnak="{{$a->data}}">
                                        Edit
                                    </button>
                                    <button class="hapusBtn btn bg-c-blue">Hapus</button>
                                </td>
                            </tr>
                            <!-- Edit  -->
                            <div class="modal fade" id="edit-modal-{{$s->id}}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Anak</h1>
                                        </div>
                                        <div class="modal-body">
                                            <form id="edit-surat-form-{{$a->data}}" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    @auth
                                                        <input type="hidden" name="data_anak" class="d-none"
                                                               value="{{ Auth::user()["data"] }}">
                                                    @endauth
                                                    <label>Nomor NIK</label>
                                                    <select name="data_anak" id="DataAnak"
                                                            class="form-select mb-3">
                                                        @foreach($data_anak as $da)
                                                            <option value="{{$da->data}}"
                                                                    @if($da->data === $a->data_anak) selected
                                                                @endif>{{$da->data_anak}}</option>
                                                        @endforeach
                                                    </select>
                                                    <label>Tanggal Lahir</label>
                                                    <input type="datetime-local" name="tanggal_lahir" id="tanggalLahir"
                                                           class="form-control mb-3"
                                                           value="{{$a->tanggal_lahir}}">

                                                    <label class="d-block">Foto : </label>
                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-3">
                                                            <label
                                                                class="btn p-1 w-100 btn-outline-success form-control">
                                                                <span>Upload Foto</span>
                                                                <input type="foto" name="foto" class="d-none"
                                                                       id="fotoUpload">
                                                            </label>
                                                        </div>
                                                        <div class="col p-0">
                                                            <p class="fileFoto m-0 d-inline-block"></p>
                                                        </div>
                                                    </div>
                                                    @csrf
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" onclick="clearText()"
                                                    data-bs-dismiss="modal">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-gradient edit-btn"
                                                    form="edit-data-anak-form-{{$s->id}}">
                                                Edit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('footer')
    <script>
        function clearText() {
            $(`.fileFoto`).text('');
            $('#fotoUpload').val('');
        }
    </script>
    <script type="module">
        $('.table').DataTable();

        $('input[type=file]').on('change', function () {
            const fileFoto = $(this).val().replace(/.*(\/|\\)/, '');
            $(`.fileFoto`).text(fileFoto);
        })

        $('#tambah-data-form').on('submit', function (e) {
            e.preventDefault();
            let data = new FormData(e.target);
            console.log(Object.fromEntries(data))
            axios.post('/dashboard_kader/data_anak', data, {
                'Content-Type': 'multipart/form-data'
            })
                .then((res) => {
                    $('#tambah-data-anak-modal').css('display', 'none')
                    swal.fire('Berhasil tambah data!', '', 'success').then(function () {
                        location.reload();
                    })
                })
                .catch((err) => {
                    swal.fire('Gagal tambah data!', '', 'warning');
                    console.log(err)
                });
        })

        /*-------------------------- EDIT SURAT -------------------------- */
        $('.editBtn').on('click', function (e) {
            $('input[type=file]').trigger('change');

            e.preventDefault();
            let dataAnak = $(this).attr('dataAnak');
            $(`#edit-surat-form-${dataAnak}`).on('submit', function (e) {
                e.preventDefault();
                let data = new FormData(this);
                // console.log(Object.fromEntries(data));
                axios.post(`/dashboard_kader/data_anak/${dataAnak}`, data)
                    .then((res) => {
                        $(`#edit-modal-${dataAnak}`).css('display', 'none')
                        swal.fire('Berhasil edit data!', '', 'success').then(function () {
                            location.reload();
                        })
                    })
                    .catch((err) => {
                        console.log(err)
                        swal.fire('Gagal tambah data!', '', 'warning');
                    })
            })
        })

        /*-------------------------- HAPUS USER -------------------------- */
        $('.table').on('click', '.hapusBtn', function () {
            let dataAnak = $(this).closest('tr').attr('dataAnak');
            swal.fire({
                title: "Apakah anda ingin menghapus data ini?",
                showCancelButton: true,
                confirmButtonText: 'Setuju',
                cancelButtonText: `Batal`,
                confirmButtonColor: 'red'
            }).then((result) => {
                if (result.isConfirmed) {
                    //dilakukan proses hapus
                    axios.delete(`/dashboard_kader/data_anak/${dataAnak}`)
                        .then(function (response) {
                            console.log(response);
                            if (response.data.success) {
                                swal.fire('Berhasil di hapus!', '', 'success').then(function () {
                                    //Refresh Halaman
                                    location.reload();
                                });
                            } else {
                                swal.fire('Gagal di hapus!', '', 'warning');
                            }
                        }).catch(function (error) {
                        swal.fire('Data gagal di hapus!', '', 'error').then(function () {
                            //Refresh Halaman
                            location.reload();
                        });
                    });
                }
            });
        })
    </script>
@endsection
