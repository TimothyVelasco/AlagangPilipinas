@extends('layouts.master')
@section('content')

<style>
@font-face {
    font-family: 
}

p {
    text-align: left;
    margin-left: 10%;
    font-family:
}
<style>
            /* The navigation menu links */


            .content {
                margin-left: 200px;
            }

            .sidenav h1 {
                padding: 0px 7px 0px 25px;
                text-decoration: none;
                font-size: 25px;
                color: #F9E453;
                display: block;
            }

            .h2 {
                padding: 5px 8px 6px 16px;
                text-decoration: none;
                font-size: 30px;
                color: #17202A;
                display: block;
            }


            /* The sidebar menu */
            .sidenav {
                height: 130%;
                /* Full-height: remove this if you want "auto" height */
                width: 200px;
                /* Set the width of the sidebar */
                position: fixed;
                /* Fixed Sidebar (stay in place on scroll) */
                z-index: 1;
                /* Stay on top */
                top: -9px;
                /* Stay at the top */
                left: 0;
                background-color: #2C3E50;
                /* sidebar color */
                overflow-x: hidden;
                /* Disable horizontal scroll */
                padding-top: 20px;
            }

            /* The navigation menu links */
            .sidenav a {
                padding: 15px 8px 6px 16px;
                text-decoration: none;
                font-size: 20px;
                color: #FDFEFE;
                display: block;
            }

            /* When you mouse over the navigation links, change their color */
            .sidenav a:hover {
                color: #F5B041;
            }

            /* Style page content */
            .main {
                margin-left: 160px;
                /* Same as the width of the sidebar */
                padding: 0px 10px;
            }

            /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
            @media screen and (max-height: 450px) {
                .sidenav {
                    padding-top: 15px;
                }

                .sidenav a {
                    font-size: 18px;
                }
            }

</style>

<div>
    <div class="sidenav">
        <center><img src="/image/APLogoWhite.png" style="width: 200px;" alt="..."></center>
        <center>
            <h1>Your Sales</h1>
        </center>
        <a href="{{ route('sales.sales') }}">Sales</a>
        <center>
            <h1>Marketplace</h1>
        </center>
        <a href="{{ route('marketplace.marketplace') }}">Latest</a>
        <a href="{{ route('marketvets.marketvets') }}">Vet Clinic</a>
        <a href="{{ route('marketsupplies.marketsupplies') }}">Supplies</a>
        <a href="{{ route('marketpets.marketpets') }}">Pets</a>
    </div>
</div>

<div class="container px-4 py-5">
<a  href="{{ route('marketvets.marketvets') }}" class="btn btn-primary mb-4">Back to marketplace</a>

    <!-- Product Name -->
    <h2 class="pb-2 border-bottom" id="features">Vet Clinic Name</h2>
    <div class="container text-center mt-5">
        <div class="row">
          @foreach($vets as $vet)
          <div class="col-sm-5 col-md-6">
            <h3>{{$vet->vetname}}</h3>
          </div>
          @endforeach
        </div>
    </div>
    <br>
    <!-- Product Picture -->
    <h2 class="pb-2 border-bottom" id="features">Vet Clinic Picture</h2>
    <div class="container text-center mt-5">
        <div class="row">
          @foreach($vets as $vet)
          <div class="col-sm-5 col-md-6">
            <img src="/storage/vet_profile_photos/{{$vet->vetprofilephoto}}" style="width:50%">
          </div>
          @endforeach
        </div>
    </div>
    <br>
    <!-- Description -->
    <h2 class="pb-2 border-bottom" id="aboutus">Location</h2>
    <div class="container text-center mt-5">
        <div class="row">
          @foreach($vets as $vet)
          <div class="col-sm-5 col-md-6">
            <p>{{$vet->street}}</p>
            <p>{{$vet->barangay}}</p>
            <p>{{$vet->city}}</p>
          </div>
          @endforeach
        </div>
    </div>
    <br>
    <!-- Description -->
    <h2 class="pb-2 border-bottom" id="aboutus">Business Hours</h2>
    <div class="container text-center mt-5">
        <div class="row">
          @foreach($vets as $vet)
          <div class="col-sm-5 col-md-6">
            <h2>{{$vet->businesshours}}</h2>
          </div>
          @endforeach
        </div>
    </div>
</div>
@endsection