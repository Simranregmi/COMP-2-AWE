@extends('layout.navbar')
@section('content')
<!-- Showcase -->
<section class="bg-light text-dark p-5 text-center">
    <div class="container">
        <div class="d-sm-flex">
            <div>
                <h1 class="text-info"> Become a<span class="text-warning"> Utopian Customer </span></h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                </p>
                @guest
                @if (Route::has('login'))
                <a class=" btn  btn-primary text-white" href="{{ route('login') }}">{{ __('Be A Customer') }}</a>
                @endif
                @endguest
            </div>
            <img class="img-fluid" src="./img/book.png" alt="Image">
        </div>
    </div>
</section>
<!-- CD Boxes -->
<section class="p-5">
    <h1 class="text-center pb-4"> Items </h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/book.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>The Wonder World Book</h4>
                        <p>£ 40</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/gamecd.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>The Play Station 4 CD</h4>
                        <p>£ 60</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/surf.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4> Jumanji The Game</h4>
                        <p>£ 60</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Addition of Foreach loop -->

@include('layout.footer');
@endsection
