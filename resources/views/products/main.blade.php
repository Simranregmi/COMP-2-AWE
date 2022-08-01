@extends('products.navbar')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Image Slider -->
    <div class="container-fluid">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="0"></li>
                <li data-target="#demo" data-slide-to=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/cds.jpeg" alt="Cds" width="100%" height="500">
                </div>
                <div class="carousel-item">
                    <img src="./img/book.jpeg" alt="Chicago" width="100%" height="500">
                </div>
                <div class="carousel-item">
                    <img src="./img/pc.jpeg" alt="Chicago" width="100%" height="500">
                </div>
            </div>
        </div>
    </div>
    <!-- Contents -->
    <!-- Book -->
    <section class="p-5">
        <h1 class="text-center pb-4"> Books </h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/book.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>The Wonder World Book</h3>
                            <p>£ 40</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/book.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>The Karlee Mosciski</h3>
                            <p>£ 50</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/book.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>The Coralie Schulist</h3>
                            <p>£60.5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CD -->
    <h1 class="text-center">CD</h1>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/gamecd.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>The Destini Considine DVM</h3>
                        <p>£80.5</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/gamecd.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>The Benedict Pouros PhD</h3>
                        <p>£90.5</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/gamecd.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>The Prof. Francisco Jacobs </h3>
                        <p>£1000.5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Game -->
    <h1 class="text-center mt-5">Game</h1>
    <div class="container my-4">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/surf.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>The Stacey Conroy</h3>
                        <p>£20.5</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/surf.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>Glenda Konopelskit</h3>
                        <p>£40.5</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/surf.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>Dr.Lucio Becker II</h3>
                        <p>£80.5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- @foreach($games as $game)
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="d-flex">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/gamecd.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>{{ $game->title }} </h3>
                            <h3>£{{ $game->price }} </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    @endforeach -->
    @include('layout.footer')
    @endsection
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
