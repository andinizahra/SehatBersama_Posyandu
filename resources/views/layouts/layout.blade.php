<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css" >
    <style>
        .nav {
    background-color: #D5E8EC;
    display: flex; /* Menggunakan display flex untuk mengatur elemen sejajar */
    justify-content: space-between; /* Mengatur ruang sejajar di antara elemen */
    align-items: center; /* Mengatur elemen agar sejajar vertikal */
    padding: 20px; /* Padding untuk memberikan ruang di sekitar elemen navbar */
    height: 30px;

}

.nav-left {
    display: flex; /* Menggunakan display flex agar gambar dan teks di dalam navbar sejajar */
    align-items: center; /* Mengatur elemen agar sejajar vertikal */
}
.btnLogout {
    background-color: red;
    color: white;   
    text-decoration: none; 
    padding: 10px 20px; 
    border: none;
    cursor: pointer;
    border-radius: 20px;
}

.sidebar {
    background-color: #3F75C3;
    color: white;
    width: 200px;
    height: 500px;
    margin-left: -8px;
    text-decoration: none;
    float: left; 
}

.sidebar li {
    padding-top: 30px;
    padding-left: 20px;
    list-style: none; 
    color: white; 
    display: flex; /* Menggunakan flexbox untuk mengatur layout */
    align-items: center; /* Mengatur vertikal align ke tengah */

}

.sidebar li a {
    color: white; 
    text-decoration: none;
}

.sidebar li img {
    margin-bottom: 5px;
    margin-right: 10px; 
}
    </style>
</head>
<body>
    <div class="container">
        <nav class="nav">
            <div class="nav-left">
                <img src="/logo_posyandu.png" style="width: 220px; height: 120px; margin-top:20px; ">
            </div>
            <div class="nav-right">
                <a class="btnLogout" href="{{ route('logout') }}">{{ __('Logout') }}</a>
            </div>
        </nav>
        <div class="sidebar">
            <li><img src="/homeIcon.svg"><a href="{{url('dashboard/')}}">Dashboard</a></li>
            <li><img src="/profil.svg"><a href="#">Profil</a></li>
            <li><img src="/vaksin.svg"><a href="#">Catatan Vaksin</a></li>
            <li><img src="/imunisasi.svg"><a href="#">Catatan Imunisasi</a></li>
            <li><img src="/jadwal.svg"><a href="#">Jadwal Posyandu</a></li>
            <li><img src="/user.svg"><a href="{{url('dashboard/dashboard/user')}}">Kelola User</a></li>
        </div>
    @yield('content')
</body>
</html>