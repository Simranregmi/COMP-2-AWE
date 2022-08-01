@extends('products.navbar')
@section('content')
<div class="card-body">
    <h1 class="text-center text-info"> Welcome Admin,{{auth()->user()->name}}!</h1>
</div>
<div class="container my-5 ">
    <div class="row mx-4">
        <div class="col-5">
        </div>
        <div class="col-2">
            <div class="card float-center" style="width: 18rem;">
                <img src="./img/simran.jpg" class="" alt="...">
            </div>
            <marquee class="text-bold"> simran regmi</marquee>
        </div>
    </div>
</div>
@include('layout.footer')
@endsection
