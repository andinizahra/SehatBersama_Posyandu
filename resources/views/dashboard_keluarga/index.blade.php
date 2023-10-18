@extends(layouts.layout2)

<!DOCTYPE html>
<html>
<head>
    <title>Posyandu - Halaman Beranda</title>
</head>
<body>
<div class="row">
    <div class="vol-md-12">
    @if(auth()->user()->role == 'admin')
        <div class="card rounded-lg">
            <div class="card-body text-center col" style="background-image  : linear-gradient(to right, #F2ECBE,#F9DEC9)">
                <h5
                style="font-family: 'Merienda One', sans-serif; font-size: 16px;" class="mt-3">
              ''  <b> WELLCOMEEEEEEEEEEEEE <i> {{Auth::user()->username}}</i>!</b>
                </h5>
                <span style="font-size: 50px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; vertical-align: middle">
                <b>SURATTTTTTTTTTT PIYOOO EXPRESSSSSSS</b>
                </span>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
        <div class="row">
            @if(auth()->user()->role == 'keluarga')
                <div class="col-3">
                    <a href="{{url('dashboard_keluarga/')}}" class="text-decoration-none">
                        <div class="card bg-c-blue ">
                            <div class="card-body text-white">
                                <h1 class="text-right"><span
                                        class="f-right">{{$user}}</span></h1>
                                <h2>User</h2>
                            </div>
                        </div>
                    </a>
                </div>

    </body>
</html>