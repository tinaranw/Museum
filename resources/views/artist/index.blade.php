@extends('layout.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Artist List</h1>
        </div>
        @auth
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{route('artist.create')}}" class="btn btn-block" role="button"
                   aria-pressed="true" style="background-color: #90a88e; color: #fff">Add</a>
            </div>
        </div>
        @endauth
        
        
        <div class="row" style="margin-top: 30px;">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Birthplace</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Created At</th>
                    @auth
                    <th scope="col">Action</th>
                    @endauth
                </tr>
                </thead>
                <tbody>
                @foreach($artists as $artist)
                    <tr>
                        <td>
                            @auth
                                <a href="{{ route('artist.edit', $artist) }}">
                            @endauth{{ $artist->name }}
                            @auth
                                 </a>
                            @endauth
                            
                        </td>
                        <td>{{ $artist->email }}</td>
                        <td>{{ $artist->phone_number }}</td>
                        <td>{{ $artist->address }}</td>
                        <td>{{ $artist->birthdate }}</td>
                        <td>{{ $artist->birthplace }}</td>
                        <td>{{ $artist->updated_at }}</td>
                        <td>{{ $artist->created_at }}</td>
                        @auth
                        <td>
                            <form action="{{ route('artist.destroy', $artist) }}" method="post">
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
