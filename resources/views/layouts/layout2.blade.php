<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard_keluarga</title>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container"> 
            <a class="navbar-brand  text-warning fw-bold d-flex align-items-center " href="{{ url('/dashboard') }} ">
                <h2 class="fw-bold m-0 text-gradient" style="">
                    Keluarga
                </h2>
            </a>
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                <div class="navbar-nav">
                        <a href="{{url('dashboard_keluarga', ['Informasi'])}}" class="nav-item nav-link">Informasi</a>
                        <a href="{{url('dashboard_keluarga', ['Riwayat'])}}" class="nav-item nav-link">Riwayat</a>
                       
        </div>
</body>
</html>