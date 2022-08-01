<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Start NavBar -->
    <!-- expanding navbar till large so toogle comes in when its size is medium -->
    <nav class="navbar navbar-expand-md navbar-light bg-light ">
        <div class="container">
            <a href="/" class="navbar-brand"><img class="img-fluid w-50" src="./img/utopian.jpeg" alt=" LOGO"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <h1 class="fs-5 fst-normal text-info mt-2">Utopian Shop palace</h1>
                <ul class="navbar-nav ms-5" id="navmenu">
                    <li class="nav-item">
                        <a href="/" class="nav-link"> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link"> About Us</a>
                    </li>
                </ul>
                <!-- SearchBar -->
                <form method="Get" action="/search">
                    <input type="text" name="search" placeholder="Find Something"
                        class="bg-light form-control rounded ms-5">
                </form>
                <!-- Authentication Button -->
                <div class="ms-auto">
                    @guest
                    @if (Route::has('login'))
                    <a class=" btn  btn-outline-warning text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                    @if (Route::has('register'))
                    <a class="btn btn-success text-white text-inline"
                        href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                </div>
                @endguest
            </div>
        </div>
    </nav>
    <!-- MainPage -->
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
