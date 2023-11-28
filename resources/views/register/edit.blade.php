@extends('layouts/master')

@section('content')

<h2>EDIT Register</h2>
<form action="/register/{{$register->id}}" method="post">
 @method('PUT')
@csrf
<input type="text" name="nim" placeholder="nim" required value="{{$register->nim}}">
<input type="text" name="name"  placeholder="name" required value="{{$register->name}}">
<input type="email" name="email" placeholder="email" required value="{{$register->email}}">
<input type="text" name="password" placeholder="password" required value="{{$register->password}}"> 
<button type="submit">EDIT</button>
</form>

@endsection
