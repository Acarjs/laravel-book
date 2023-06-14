{{-- 4. step of Fortify: create a register.blade.php file --}}

@extends('layouts/main')

@section('content')
    
    <form action="{{ route('register') }}" method="post">
 
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
 
    <label for="password_confirmation">Password Confirm: </label>
    <input type="password" id="password_confirmation" name="password_confirmation" value="">
    <br>
 
    <button>Register</button>
 
</form>

@endsection


{{-- 5. you can see the registration in your phpmyadmin table: laravel_books > user --}}