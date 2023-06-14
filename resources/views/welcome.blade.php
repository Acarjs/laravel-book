@extends('./layouts/main')


{{-- @section('content') should be as the same as in @yield('content') --}}
@section('content') 
<h1>This is welcome page</h1>

<a href="{{route('authors.index')}}">Authors</a>
@endsection
