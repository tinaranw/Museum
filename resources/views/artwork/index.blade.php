@extends('layout.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Artwork List</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{route('artwork.create')}}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true">Add</a>
            </div>
        </div>
        
        <div class="row" style="margin-top: 30px;">

            @foreach($artworks as $artwork)
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
            @endforeach
            {{-- <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created by</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Price ($)</th>
                    <th scope="col">Type of Artwork</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($artworks as $artwork)
                    <tr>
                        <td><a href="{{ route('artwork.edit', $artwork) }}">{{ $artwork->title }}</a></td>
                        <td>{{ $artwork->description }}</td>
                        <td>{{ $artwork->creator->name . ' ('.$artwork->creator->email . ')'}}</td>
                        <td>{{ $artwork->artwork_date }}</td>
                        <td>{{ $artwork->price }}</td>
                        <td>{{ $artwork->type }}</td>
                        <td>{{ $artwork->updated_at }}</td>
                        <td>{{ $artwork->created_at }}</td>
                        <td>
                            <form action="{{ route('artwork.destroy', $artwork) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table> --}}
        </div>
    </div>
@endsection
