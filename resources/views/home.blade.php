@extends('layout.app')
@section('title')
<title>Homepage</title>
@endsection
@section('content')
<header style="width: 100%;height: 600px;background-position: top;background-size: cover;background-repeat: no-repeat;background-image: url({{ asset('/img/headerbg.png') }});">
    <div style="width: 100%;"></div>
    <div class="container text-center d-flex align-items-center" style="width: 100%;height: 100%;">
        <div style="width: 100%;">
            <h1 style="color: rgb(255,255,255);font-family: Lato, sans-serif;font-size: 24px;"><strong>W E L C O M E&nbsp;</strong>&nbsp; T O&nbsp;</h1>
            <h1 style="color: rgb(255,255,255);font-family: Amiri, serif;font-size: 70px;"><strong>le Musée de Silence</strong><br></h1>
        </div>
    </div>
</header>
<section style="width: 100%;background-color: #ffffff;">
    <div class="container" style="width: 100%;">
        <div class="row" style="width: 100%;padding: 30px 10px;">
            <div class="col" style="width: 100%;height: 100%;"><img class="d-lg-flex justify-content-lg-center align-items-lg-center" src="{{ asset('/img/museumlogo.png') }}" style="width: 400px;height: auto;"></div>
            <div class="col d-flex align-items-center">
                <div>
                    <p>HISTORY OF</p>
                    <h1 style="font-family: Amiri, serif;font-size: 56px;"><strong>le Musée de Silence</strong><br></h1>
                    <p style="margin: 20px 0 0 0;"><br><br><strong>le Musée de Silence&nbsp;</strong>in Moscow is a natural history museum that exhibits a vast range of specimens from various segments of natural history. It is one of three major museums on Exhibition Road in South
                        Kensington, the others being the Science Museum and the Victoria and Albert Museum.<br><br></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="width: 100%;background-color: #f0ece3;">
    <div class="container" style="width: 100%;">
        <div class="row" style="width: 100%;padding: 30px 10px;">
            <div class="col d-flex align-items-center">
                <div>
                    <p>INFORMATION</p>
                    <h1 style="font-family: Amiri, serif;font-size: 56px;"><strong>The Museum</strong></h1><button class="btn btn-primary" type="button" style="background-color: #596e79;background-size: auto;height: 40px;width: 90px;margin: 70px 0 0 0;">Donate&nbsp;</button></div>
            </div>
            <div class="col"><img src="{{ asset('/img/museumlook.jpg') }}" style="width: 100%;height: 100%;"></div>
        </div>
    </div>
</section>
@endsection
