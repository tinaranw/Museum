@extends('layout.app')
@section('title')
<title>Add Artist</title>
@endsection
@section('content')
    <div class="container" style="margin: 20px auto;">
        <div class="row">
            <h1 class="col">Add Artist</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('artist.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number:</label>
                        <input type="number" class="form-control" name="phone_number" required>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="form-group">
                        <label>Birthdate:</label>
                        <input type="date" class="form-control" name="birthdate" required>
                    </div>
                    <div class="form-group">
                        <label>Birthplace:</label>
                        <input type="text" class="form-control" name="birthplace" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
