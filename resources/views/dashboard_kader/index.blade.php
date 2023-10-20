@extends('layouts.layout')
@section('title', 'Dashboard Kader')

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
            <ul>
                <li><img src="{{ asset('homeIcon.svg') }}"><a href="{{ url('/dashboard_kader') }}">Dashboard</a></li>
                <li><img src="{{ asset('profil.svg') }}"><a href="#">Profil</a></li>
                <li><img src="{{ asset('data.svg') }}"><a href="{{ url('/dashboard/dashboard_kader/data_anak') }}">Data Anak</a></li>
                <li><img src="{{ asset('data.svg') }}"><a href="{{ url('/dashboard/data_ibu_hamil') }}">Data Ibu Hamil</a></li>
                <li><img src="{{ asset('pemeriksaan.svg') }}"><a href="#">Pemeriksaan</a></li>
                <li><img src="{{ asset('pemeriksaan.svg') }}"><a href="{{ url('/dashboard/dashboard_kader/dokumentasi') }}">Dokumentasi</a></li>
                <li><img src="{{ asset('activity.svg') }}"><a href="{{ url('/dashboard/log') }}">Log</a></li>
            </ul>
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
                       <img src="activity.svg"><a href="{{url('/dashboard/log')}}" class="nav-item nav-link">Log</a>
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