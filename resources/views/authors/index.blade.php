@extends('../layouts/main')

@section('content')
        <h3>Authors</h3>

        <a href="{{route('authors.create')}}">New Author</a>
        <br>
        

         <ul>
        @foreach($authors as $author)
            <li>
                <a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a> 
                {{-- By using $author->id, the code is accessing the id value of the $author object and using it as a parameter in the route function. This route function likely generates a URL for the specified route, where the author's ID is passed as a parameter. The resulting URL is then used as the href attribute value for the anchor (<a>) tag. --}}
            </li>
        @endforeach
    </ul>


@endsection