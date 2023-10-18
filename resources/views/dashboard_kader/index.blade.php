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
            <li><img src="homeIcon.svg"><a href="#dashboard_kader">Dashboard</a></li>
            <li><img src="profil.svg"><a href="#">Profil</a></li>
            <li><img src="data.svg"><a href="#">Data Anak</a></li>
            <li><img src="data.svg"><a href="#">Data Ibu Hamil</a></li>
            <li><img src="pemeriksaan.svg"><a href="#">Pemeriksaan</a></li>
            <li><img src="dokumentasi.svg"><a href="#">Dokumentasi</a></li>
        </div>
        <div class="dashboard">
            <h2>Dashboard <div class="garis-vertikal"></div> Sehat Bersama Posyandu</h2>
        </div>
        <div class="hi">
            <h3>Halo Kader !</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card-blue">
                      <img src="data.svg"><h2>Data Anak</h2>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-blue">
                      <img src="data.svg"><h2>Data Ibu Hamil</h2>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-blue">
                       <img src="pemeriksaan.svg"> <h2>Pemeriksaan</h2>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card-blue">
                       <img src="dokumentasi.svg"> <h2>Dokumentasi</h2>
                    </div>
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