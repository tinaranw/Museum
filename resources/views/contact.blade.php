@extends('layout.app')
@section('title')
<title>Contact</title>
@endsection
@section('content')
<section style="width: 100%;background-color: #ffffff;">
    <div class="container" style="width: 100%;">
        <div class="row" style="width: 100%;padding: 30px 10px;">
            <div class="col" style="width: 100%;height: 100%;"><img class="d-lg-flex justify-content-lg-center align-items-lg-center" src="{{ asset('/img/museumlogo.png') }}" style="width: 400px;height: auto;"></div>
            <div class="col d-flex align-items-center">
                <div>
                    <p>Reach Out to Us</p>
                    <h1 style="font-family: Amiri, serif;font-size: 56px;"><strong>Contact Us</strong><br></h1>
                    <p style="margin: 20px 0 0 0;"><a href="https://bootstrapstudio.io/releases/app/4.4.4/#">(+62) 817 29172</a><br></p>
                    <p style="margin: 20px 0 0 0;"><a href="https://bootstrapstudio.io/releases/app/4.4.4/#">info@lmdsilence.ru</a><br></p>
                    <p style="margin: 20px 0 0 0;">1037, Moscow, st. Louie, building 59/1, building 1<br></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection