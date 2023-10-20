<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">


    <style>
      .person {
    cursor:pointer;
    position: absolute; /* Mengatur posisi absolut */
    top: 10px; /* Atur jarak dari atas */
    right: 15px; /* Atur jarak dari kanan */
    color: white;
}

.navbar {
    list-style: none; /* Menghilangkan daftar pemilihan */
    padding: 0; /* Menghapus padding */
    position: sticky;
    
}

.navbar li {
    display: inline; /* Atur elemen list item agar berjejer horizontal */
    margin-right: 350px; /* Spasi antara item navbar */
}

.navbar a {
    text-decoration: none; /* Menghilangkan garis bawah dari tautan */
}
    </style>
</head>
<body> 
            <div class="person">
            <svg xmlns="http://www.w3.org/2000/svg"  width="35px" height="35" fill="currentColor"  class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
</div>

<div style="" class="container mt-4">
@yield('content')
</div>
</body>
</html>