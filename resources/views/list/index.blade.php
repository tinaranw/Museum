@extends('layout.app')
@section('title')
<title>List</title>
@endsection
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List</h1>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-bordered">
                <thead style="background-color: #f0ece3;color: #282d32;">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Artworks</th>
                </tr>
                </thead>
                <tbody>
                @foreach($artists as $artist)
                    <tr>
                        <td>{{ $artist->name }}</td>
                        <td>{{ $artist->email }}</td>
                       
                        <td>
                            @foreach($artist->artworks as $artwork)
                                <li>{{$artwork->title}}</li>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
