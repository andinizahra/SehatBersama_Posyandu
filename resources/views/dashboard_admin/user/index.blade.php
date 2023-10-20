@extends('layouts.layout')
@section('title', 'User')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=josefin-sans:500">
    <title>Dashboard</title>
</head>
<body>
        <div class="col d-flex justify-content-between mb-2">
            <div class="btn-1">
                <a class="btn btn-gradient" style="color: white" href="{{url('/dashboard')}}">
                    Kembali</a>
                <button type="button" class="btn btn-gradient" data-bs-toggle="modal"
                        data-bs-target="#tambah-user-modal"> Tambah
                </button>
            </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover DataTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                ?>
                                @foreach($user as $u)
                                <tr idUser="{{$u->id}}">
                                    <td>{{$no++}}</td>
                                    <td style="padding: 10px;">{{$u->username}}</td>
                                    <td class="text-capitalize">{{$u->role}}</td>
                                    <td>
                                        <button type="button" class="editBtn btn btn-gradient" style="color: white" data-bs-toggle="modal"
                                            data-bs-target="#edit-modal-{{$u->id}}" idUser="{{$u->id}}">
                                            Edit
                                        </button>
                                        <button class="hapusBtn btn btn-danger">Hapus</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
@section('footer')
@section('footer')
<script type="module">
    $('.table').DataTable();
    /*-------------------------- TAMBAH USER -------------------------- */
    $('#tambah-user-form').on('submit', function (e) {
        e.preventDefault();
        let data = new FormData(e.target);
        axios.post('/dashboard_admin/user/tambah', Object.fromEntries(data))
            .then(() => {
                $('#tambah-user-modal').css('display', 'none')
                swal.fire('Berhasil tambah data!', '', 'success').then(function () {
                    location.reload();
                })
            })
            .catch(() => {
                swal.fire('Gagal tambah data!', '', 'warning');
            });
    })

    /*-------------------------- EDIT USER -------------------------- */
    $('.editBtn').on('click', function (e) {
        e.preventDefault();
        let idUser = $(this).attr('idUser');
        $(`#edit-user-form-${idUser}`).on('submit', function (e) {
            e.preventDefault();
            let data = new FormData(e.target);
            axios.post(`/dashboard_admin/user/${idUser}/edit`, Object.fromEntries(data))
                .then(() => {
                    $(`#edit-modal-${idUser}`).css('display', 'none')
                    swal.fire('Berhasil edit data!', '', 'success').then(function () {
                        location.reload();
                    })
                })
                .catch(() => {
                    swal.fire('Gagal tambah data!', '', 'warning');
                })
        })
    })

    /*------- HAPUS USER ------- */
    $('.table').on('click', '.hapusBtn', function () {
        let idUser = $(this).closest('tr').attr('idUser');
        swal.fire({
            title: "Apakah anda ingin menghapus data ini?",
            showCancelButton: true,
            confirmButtonText: 'Setuju',
            cancelButtonText: `Batal`,
            confirmButtonColor: 'red'
        }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`/dashboard_admin/user/${idUser}/delete`).then(function (response) {
                    console.log(response);
                    if (response.data.success) {
                        swal.fire('Berhasil di hapus!', '', 'success').then(function () {
                            //Refresh Halaman
                            location.reload();
                        });
                    } else {
                        swal.fire('Gagal di hapus!', '', 'warning').then(function () {
                            //Refresh Halaman
                            location.reload();
                        });
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
