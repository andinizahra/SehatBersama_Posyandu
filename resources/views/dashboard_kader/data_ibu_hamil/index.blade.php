@extends('layout.layout')
@section('title', 'Data Ibu Hamil')
@section('content')
<div class="row">
    <h1 class="DataIbu">Data Ibu Hamil</h1>
    <div class="card">
        <div class="carddata">
            <div class="row">
                <div class="col">
                    <div class="input-group col-md-4" style="max-width: 300px; border-right: none;">
                        <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
                        <input class="form-control py-2 border-right-0 border" type="search" placeholder="search" id="example-search-input">
                        <span class="input-group-append">
                            <div style="border-left: none;" class="input-group-text py-2 border-left-0 bg-transparent"><i class="bi-search"></i></div>
                        </span>
                    </div>
                </div>
                <div class="col float-end text-end ml-5">
                    <a href="/dashboard_kader/data_ibu_hamil" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered ibu">
                    <thead>
                        <tr>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama Ibu Hamil</th>
                            <th scope="col">tanggal Lahir</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $x = 1;  ?>
                        @foreach ($data_ibu_hamil as $h)
                        <tr>
                            <th scope="row">{{ $b++ }}</th>
                            <td>{{ $h->nik_ibu_hamil}}</td>
                            <td>{{ $h->nama_ibu_hamil }}</td>
                            <td>{{ $h->tanggal_lahir }}</td>
                            <td>
                                @if($h)
                                <img src="data:{{ $h->jpg}};base64,{{ base64_encode($h->foto) }}>" alt="">
                                @else
                                <p>Image not found</p>
                                @endif
                                {{ $h->foto }} 
                            </td>
                            <td>
                               
                                <a href="{{ url('/dashboard_kader/data_ibu_hamil',['detail', $h->kode]) }}"><i class="bi-eye"></i></a>
                                
                                <a href="{{ url('/dashboard_kader/data_ibu_hamil',['hapus', $h->kode]) }}" onclick="confirm('Apa anda yakin ingin menghapus data ini?')"><i class="bi-trash"></i></a>
                               
                                <a href=""><i class="bi-pencil-square"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection