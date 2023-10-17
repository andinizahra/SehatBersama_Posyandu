@extends('layouts.layout')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kader</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="profile-container">
        <h1>Profil Kader</h1>
        <img src="profile_kader.jpg" alt="Foto Profil">
        <h2>Nama Pengguna</h2>
        <p>NIP</p>
        <p>Role: Kader</p>
        <p>Tempat Tanggal Lahir</p>
        <p>Jenis Kelamin</p>
        <p>Alamat: Jl.Bintara 08</p>
        <p>Nomor Telepon: 08123456789</p>
        <a href="#">Ubah Profil</a>
    </div>
</body>
</html>
@endsection