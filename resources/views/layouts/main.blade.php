<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
    @vite('resources/css/app.scss')
</head>
<body>
        <nav>
            @auth 
            {{-- inside of this code will be visible only user will be logged in --}}
                <form action="{{ route('logout') }}" method="post">
                   
                    @csrf
                    <button>Logout</button>
 
                </form>

            @guest
                
            @endguest
                            
            @endauth

        </nav>


        @include('common/messages')

        @yield('content')
</body>
</html>