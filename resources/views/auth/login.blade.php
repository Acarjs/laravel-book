{{-- LOGIN PAGE --}}


@extends('layouts/main')

@section('content')
    
    <form action="{{ route('login') }}" method="post">
 
    @csrf
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">
    <br>

    <label for="email">Email: </label>
    <input type="email" id="email" name="email" value="{{ old('email') }}">
    <br>
    
    <label for="password">Password: </label>
    <input type="password" id="password" name="password" value="">
    <br>
 
  
 
    <button>Login</button>
 
</form>

@endsection