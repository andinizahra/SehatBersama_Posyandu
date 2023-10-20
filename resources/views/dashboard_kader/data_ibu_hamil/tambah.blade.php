@extends('layout.layout')
@section('content')
<div class="row">
    <h3 class="dataIbuhamil">Tambah Data</h1>
</div>
<div class="card">
    <div class="card-header">
        Form Tambah Data Ibu Hamil
    </div>
    <div class="card-body">
        <form class="addibu" action="{{ url('data_ibu_hamil', ['addsubmit']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" id="nik" placeholder="">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Ibu Hamil</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <div class="input-group mb-3">
                    <input type="number" name="tanggal_lahir" class="form-control" id="tanggal_lahir" aria-label="pe">
                </div>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" name="foto" type="file" id="formFile">
            </div>
            <button type="submit" class="btn btn-success">Add Data</button>
        </form>
    </div>
</div>
@endsection