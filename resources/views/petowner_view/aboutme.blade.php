@extends('layouts.home')

@push('css')

@endpush

@section('content')

<center><h1>About Us</h1><center>
<div class = "container">
<div class="row">
    <div class="card" style="width: 18rem;">
        <img src="/image/tims.jpg" class="card-img-top" alt="..." width="300px" height="350px">
        <div class="card-body">
            <H5>Timothy Ckhille Velasco</H5>
            <p class="card-text">The project manager of this project</p>
        </div>
    </div>
        <div class="card" style="width: 18rem;">
        <img src="/image/keith.jpg" class="card-img-top" alt="..." width="300px" height="350px">
        <div class="card-body">
            <H5>Keith Topino</H5>
            <p class="card-text">The main UI designer of the of the team</p>
        </div>
    </div>
        <div class="card" style="width: 18rem;">
        <img src="/image/louie.jpg" class="card-img-top" alt="..." width="300px" height="350px">
        <div class="card-body">
            <H5>Louie Cortero</H5>
            <p class="card-text">One of the support programmer of the team</p>
        </div>
    </div>
        <div class="card" style="width: 18rem;">
            <img src="/image/jell.jpg" class="card-img-top" alt="..." width="300px" height="350px">
                <div class="card-body">
                    <H5>Mary Jellean Ellema</H5>
                    <p class="card-text">The Secretary of the team.</p>
        </div>
    </div>
</div>
</div>
@endsection