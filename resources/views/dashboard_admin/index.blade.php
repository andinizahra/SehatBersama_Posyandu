@extends('layouts.layout')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <nav class="nav" style="margin: -8px; margin-top: -20px; height: 80px;">
            <div>
                <img src="logo_posyandu.png" style="width:200px; height:100px margin-top: 100px;">
            </div>
                <a class="btn logout btn-danger" href="{{ route('logout') }}">{{ __('Logout') }}</a>
        </nav>
    </div>
</body>
</html>
@endsection