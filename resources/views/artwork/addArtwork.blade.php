@extends('layout.app')
@section('content')
    <div class="container" style="margin: 20px auto;">
        <div class="row">
            <h1 class="col">Add Artwork</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('artwork.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Created by:</label>
                        <select name="artist_id" class="custom-select">
                            @foreach ($artists as $artist)
                                <option value="{{$artist->id}}">{{$artist->name.'('. $artist->email .')'}}</option>
                            @endforeach
 
                        </select>
                     </div>
                    <div class="form-group">
                        <label for="tanggal">Artwork Creation Date:</label>
                        <input type="date" class="form-control" name="artwork_date">
                    </div>
                    <div class="form-group">
                        <label>Price:</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label for="type">Type of Artwork:</label>
                        <select name="type" class="custom-select">
                               <option value="Ceramics"><p>Ceramics</p></option>
                               <option value="Drawing"><p>Drawing</p></option>
                               <option value="Painting"><p>Painting</p></option>
                               <option value="Sculpture"><p>Sculpture</p></option>
                               <option value="Printmaking"><p>Printmaking</p></option>
                               <option value="Design"><p>Design</p></option>
                               <option value="Crafts"><p>Crafts</p></option>
                               <option value="Photography"><p>Photography</p></option>
                               <option value="Video"><p>Video</p></option>
                               <option value="Filmmaking"><p>Filmmaking</p></option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
