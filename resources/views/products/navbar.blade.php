<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Start NavBar -->
    <!-- expanding navbar till large so toogle comes in when its size is medium -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a href="/" class="navbar-brand"><img class="img-fluid " src="{{asset('img/utopian.jpeg')}}"
                    alt=" LOGO"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <h1 class="fs-5 fst-normal text-info mt-2 ">Utopians</h1>
                <ul class="navbar-nav ms-5" id="navmenu">
                    <li class="nav-item">
                        <a href="/home" class="nav-link"> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="/books" class="nav-link"> Book</a>
                    </li>
                    <li class="nav-item">
                        <a href="/cds" class="nav-link"> Cds</a>
                    </li>
                    <li class="nav-item">
                        <a href="/games" class="nav-link"> Game</a>
                    </li>
                </ul>
                <!-- Searchbar -->
                <form method="Get" action="/search">
                    <input type="text" name="search" placeholder="Find Something"
                        class="bg-light form-control rounded ms-5">
                </form>
                <div class="ms-auto">
                    <i class="fa fa-user text-success" style="font-size:28px"></i>
                    @auth
                    <span class="text-xs font-bold uppercase mx-4 text-success">
                        Hi,{{auth()->user()->name}}!
                    </span>
                    @endauth
                    <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
