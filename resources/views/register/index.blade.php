@extends('layouts/master')

@section('content')
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h2>Data Registers</h2>
    <a href="/register/create">Add Register</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($register as $r)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$r['nim']}}</td>
                <td>{{$r['name']}}</td>
                <td>{{$r['email']}}</td>
                <td>{{$r['password']}}</td>
                <td>
                    <a href="/register/{{$r['id']}}/edit">Edit</a>
                    <form action="/register/{{$r['id']}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                
                </td>
            
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
