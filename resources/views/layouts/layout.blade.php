<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css"> 

    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=josefin-sans:500">
    <title>Dashboard</title>
</head>
<body>
    <!-- Just an image -->
            <nav class="navbar navbar-light bg-light" style= "width: 103%; height:90px; margin-top: -20px; margin-left: -20px; background-color: #D5E8EC;">
                <a class="navbar-brand" href="#">
                <img src="/logo_posyandu.png" style= "width: 220px; height:120px;">
  {{--   <a class="btnLogout" style="background-color: red; cursor: pointer; color: white; text-decoration: none; padding: 10px 20px; border: none; border-radius: 20px; margin-left: 90%; margin-bottom: -80px;" href="{{ route('logout') }}">{{ __('Logout') }}</a>

                </a>
                {{-- <div class="nav-right">
    <a class="btnLogout" style="background-color: red; cursor: pointer; color: white; text-decoration: none; padding: 10px 20px; border: none; border-radius: 20px;" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                </div> --}} 
            </nav>

    @yield('content')
</body>
</html>