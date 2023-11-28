@extends('layouts/master')

@section('content')
    

    <h2>Add Register</h2>
    <form action="{{ route('register.store') }}" method="post">
    @csrf
    <input type="text" name="nim" placeholder="nim" required>
    <input type="text" name="name"  placeholder="name" required>
    <input type="email" name="email" placeholder="email" required>
    <input type="text" name="password" placeholder="password" required>
    
    <button type="submit">Register</button>
    </form>
@endsection