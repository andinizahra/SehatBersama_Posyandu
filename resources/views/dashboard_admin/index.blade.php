@extends('layouts.layout')
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
    <div class="container">
        <nav class="nav">
            <div class="nav-left">
                <img src="logo_posyandu.png" style="width: 220px; height: 120px; margin-top:20px; ">
            </div>
            <div class="nav-right">
                <a class="btnLogout" href="{{ route('logout') }}">{{ __('Logout') }}</a>
            </div>
        </nav>
        <div class="sidebar">
            <li><img src="homeIcon.svg"><a href="#">Dashboard</a></li>
            <li><img src="profil.svg"><a href="#">Profil</a></li>
            <li><img src="vaksin.svg"><a href="#">Catatan Vaksin</a></li>
            <li><img src="imunisasi.svg"><a href="#">Catatan Imunisasi</a></li>
            <li><img src="jadwal.svg"><a href="#">Jadwal Posyandu</a></li>
            <li><img src="user.svg"><a href="#">Kelola User</a></li>
        </div>
        <div class="dashboard">
            <h2>Dashboard <div class="garis-vertikal"></div> Sehat Bersama Posyandu</h2>
        </div>
        <div class="hi">
            <h3>Halo Admin !</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card-blue">
                      <img src="vaksin.svg"><h2>Pencatatan Vaksin Ibu Hamil</h2>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-blue">
                      <img src="imunisasi.svg"><h2>Pencatatan Imunisasi Anak</h2>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-blue">
                       <img src="jadwal.svg"> <h2>Pembuatan Jadwal Vaksin dan Posyandu</h2>
                    </div>
                </div>
                <div class="col-3">
                    <a href="{{url('dashboard_admin/user')}}" class="text-decoration-none">
                    <div class="card-blue">
                       <img src="user.svg"> <h2>Kelola User</h2>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>
@endsection