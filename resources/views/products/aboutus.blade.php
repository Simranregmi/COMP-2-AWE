@extends('layout.navbar')
@section('content')
<h4 class="text-center mt-5">Our teams</h4>
<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/messi.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">CEO</h4>
                        <p class="card-text">Leo Messi</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/ratan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Founder</h4>
                        <p class="card-text">Tata Saheb</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./img/ronaldo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Manager</h4>
                        <p class="card-text">Simran Regmi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layout.footer')
@endsection
