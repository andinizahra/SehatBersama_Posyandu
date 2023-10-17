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
    </div>
</body>
</html>
@endsection