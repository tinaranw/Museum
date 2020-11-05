@extends('layout.app')
@section('content')
    <div class="container" style="margin: 20px auto;">
        <div class="row">
            <h1 class="col">Edit Artwork</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('artwork.update', $artwork) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" class="form-control" name="title" value="{{ $artwork->title }}" required>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea class="form-control" name="description" required>{{ $artwork->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Created by:</label>
                        <select name="artist_id" class="custom-select">
                            @foreach ($artists as $artist)
                                <option value="{{$artist->id}}" {{ ( $artist->id == $artwork->creator->id) ? 'selected' : '' }} required>{{$artist->name.' ('. $artist->email .')'}}</option>
                            @endforeach
 
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="tanggal">Artwork Creation Date:</label>
                        <input type="date" class="form-control" name="artwork_date" value="{{ $artwork->artwork_date }}" required>
                    </div>
                    <div class="form-group">
                        <label>Price:</label>
                        <input type="number" class="form-control" name="price" value="{{ $artwork->price }}" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type of Artwork:</label>
                        <select name="type" class="custom-select" value="{{ $artwork->type }}" required>
                               <option value="Ceramics" @if ($artwork->type == 'Ceramics') selected end="@endif"><p>Ceramics</p></option>
                               <option value="Drawing" @if ($artwork->type == 'Drawing') selected end="@endif"><p>Drawing</p></option>
                               <option value="Painting" @if ($artwork->type == 'Painting') selected end="@endif"><p>Painting</p></option>
                               <option value="Sculpture" @if ($artwork->type == 'Sculpture') selected end="@endif"><p>Sculpture</p></option>
                               <option value="Printmaking" @if ($artwork->type == 'Printmaking') selected end="@endif"><p>Printmaking</p></option>
                               <option value="Design" @if ($artwork->type == 'Design') selected end="@endif"><p>Design</p></option>
                               <option value="Crafts" @if ($artwork->type == 'Crafts') selected end="@endif"><p>Crafts</p></option>
                               <option value="Photography" @if ($artwork->type == 'Photography') selected end="@endif"><p>Photography</p></option>
                               <option value="Video" @if ($artwork->type == 'Video') selected end="@endif"><p>Video</p></option>
                               <option value="Filmmaking" @if ($artwork->type == 'Filmmaking') selected end="@endif"><p>Filmmaking</p></option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
