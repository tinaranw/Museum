@extends('layout.app')
@section('title')
<title>Artworks</title>
@endsection
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Artwork List</h1>
        </div>
        @auth
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{route('artwork.create')}}" class="btn btn-block" role="button"
                   aria-pressed="true" style="background-color: #90a88e; color: #fff">Add</a>
            </div>
        </div>
        @endauth
        
        <div class="row" style="margin-top: 30px;">

            {{-- @foreach($artworks as $artwork)
            <div class="card" style="margin: 30px">
                <div class="card-header">
                    <h1><a href="{{ route('artwork.edit', $artwork) }}">{{ $artwork->title }}</a></h1>
                    <div class="text-right">
                        <form action="{{ route('artwork.destroy', $artwork) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <h5 class="card-title">Information</h5>
                    <p class="card-text">{{ $artwork->description }}</p>
                    <p class="card-text">${{ $artwork->price }} | Date created: {{ $artwork->artwork_date }} | Type of Artwork: {{ $artwork->type }}</p>
                    <footer class="blockquote-footer">Created by <cite title="Source Title">{{ $artwork->creator->name . ' ('.$artwork->creator->email . ')'}}</cite></footer>
                    </blockquote>
                </div>
            </div>
            @endforeach --}}
            <table class="table table-bordered">
                <thead style="background-color: #f0ece3;color: #282d32;">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created by</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Price ($)</th>
                    <th scope="col">Type of Artwork</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Created At</th>
                    @auth
                        <th scope="col">Action</th>
                    @endauth
                    
                </tr>
                </thead>
                <tbody>
                @foreach($artworks as $artwork)
                    <tr><td>
                        @auth
                            <a href="{{ route('artwork.edit', $artwork) }}">
                        @endauth{{ $artwork->title }}
                        @auth
                            </a>
                        @endauth
                        </td>
                        <td>{{ $artwork->description }}</td>
                        <td>{{ $artwork->creator->name . ' ('.$artwork->creator->email . ')'}}</td>
                        <td>{{ $artwork->artwork_date }}</td>
                        <td>{{ $artwork->price }}</td>
                        <td>{{ $artwork->type }}</td>
                        <td>{{ $artwork->updated_at }}</td>
                        <td>{{ $artwork->created_at }}</td>
                        @auth
                        <td>
                            <form action="{{ route('artwork.destroy', $artwork) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn" style="background-color: #e18d01; color: #fff;">Delete</button>
                            </form>
                        </td>
                        @endauth
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
