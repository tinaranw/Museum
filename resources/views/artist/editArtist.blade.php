@extends('layout.app')
@section('title')
<title>Edit Artist</title>
@endsection
@section('content')
    <div class="container" style="margin: 20px auto;">
        <div class="row">
            <h1 class="col">Edit Artist</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('artist.update', $artist) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $artist->name }}">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" name="email" value="{{ $artist->email }}">
                    </div>
                    <div class="form-group">
                        <label>Phone Number:</label>
                        <input type="number" class="form-control" name="phone_number" value="{{ $artist->phone_number }}">
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" name="address" value="{{ $artist->address }}">
                    </div>
                    <div class="form-group">
                        <label>Birthdate:</label>
                        <input type="date" class="form-control" name="birthdate" value="{{ $artist->birthdate }}">
                    </div>
                    <div class="form-group">
                        <label>Birthplace:</label>
                        <input type="text" class="form-control" name="birthplace" value="{{ $artist->birthplace }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
