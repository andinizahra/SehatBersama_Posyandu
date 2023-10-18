@extends('layout.layout')
@section('title','Data Anak')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Data Anak
                </span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <a href="user/tambah">
                            <btn class="btn btn-success">Tambah</btn>
                        </a>

                    </div>
                    <p>
                        <hr>
                        <table class="table table-hover table-bordered DataTable">
                            <thead>
                                <tr>
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
                            </thead>
                            <tbody>
                                @foreach($data_anak as $anak)
                                <tr>
                                    <td>{{$anak->username}}</td>
                                    <td class="text-capitalize">{{$anak->role}}</td>
                                    <td>
                                        <a href="data_anak/edit/{{$anak->data_anak}}"><btn class="btn btn-primary">EDIT</btn></a>
                                        <a href="data_anak/hapus/{{$anak->data_anak}}"><btn class="btn btn-danger">HAPUS</btn></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection