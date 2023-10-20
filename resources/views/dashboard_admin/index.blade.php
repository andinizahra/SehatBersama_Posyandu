{{-- @extends('layouts.layout')
@section('content') --}}


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

        <div class="dashboard">
            <h2>Dashboard <div class="garis-vertikal"></div> Sehat Bersama Posyandu</h2>
        </div>
        <div class="hi">
            <h3>Halo Admin !</h3>
        </div>
        <div class="sidebar">
            <li><img src="/homeIcon.svg"><a href="{{url('dashboard/')}}">Dashboard</a></li>
            <li><img src="/profil.svg"><a href="#">Profil</a></li>
            <li><img src="/vaksin.svg"><a href="{{url('dashboard/catatan_vaksin')}}">Catatan Vaksin</a></li>
            <li><img src="/imunisasi.svg"><a href="#">Catatan Imunisasi</a></li>
            <li><img src="/jadwal.svg"><a href="#">Jadwal Posyandu</a></li>
            <li><img src="/user.svg"><a href="{{url('dashboard/dashboard/user')}}">Kelola User</a></li>
        </div>
        <div class="pe">
            <div class="re">
                <div class="pos">
                    <div class="cardPosyandu">
                      <img src="vaksin.svg"><h2>Pencatatan Vaksin Ibu Hamil</h2>
                    </div>
                </div>
                <div class="pos">
                    <div class="cardPosyandu">
                      <img src="imunisasi.svg"><h2>Pencatatan Imunisasi Anak</h2>
                    </div>
                </div>
                <div class="pos">
                    <div class="cardPosyandu">
                       <img src="activity.svg"><h2>Log</h2>
                    </div>
                </div>
                <div class="pos">
                    <a href="{{url('dashboard/dashboard/user')}}">
                    <div class="cardPosyandu">
                       <img src="user.svg"> 
                        <h2>Kelola User</h2>
                    </div>
                </a>
                </div>
            </div>
                </div>
            </div>
        </div>    
    </div>

</html>
{{-- @endsection --}}