@extends('layouts.vetnav')
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
        <a href="{{ route('vet.sales') }}">Sales</a>
        <center>
            <h1>Marketplace</h1>
        </center>
        <a href="{{ route('vetmarketplace.marketplace') }}">Latest</a>
        <a href="{{ route('vetmarketvets.marketvets') }}">Vets</a>
        <a href="{{ route('vetmarketsupplies.marketsupplies') }}">Supplies</a>
        <a href="{{ route('vetmarketpets.marketpets') }}">Pets</a>
    </div>
</div>

<div class="container px-4 py-5">
<a  href="{{ route('vetmarketplace.marketplace') }}" class="btn btn-primary mb-4">Back to marketplace</a>

    <!-- Product Name -->
    <h2 class="pb-2 border-bottom" id="features">Product Name</h2>
    <div class="container text-center mt-5">
        <div class="row">
          @foreach($productSells as $productSell)
            <div class="col-sm-5 col-md-6">
              <h3>{{ $productSell->product_name }}</h3>
            </div>
          @endforeach
        </div>
    </div>
    <br>
    <!-- Product Picture -->
    <h2 class="pb-2 border-bottom" id="features">Product Picture</h2>
    <div class="container text-center mt-5">
        <div class="row">
          @foreach($productSells as $productSell)
            <div class="col-sm-5 col-md-6">
              <div class="col-sm-5 col-md-6">
                <img src="/storage/product_photos/{{ $productSell->product_photo }}" style="width:50%">
              </div>
            </div>
          @endforeach
        </div>
    </div>
    <br>
    <!-- Description -->
    <h2 class="pb-2 border-bottom" id="aboutus">Description</h2>
    <div class="container text-center mt-5">
        <div class="row">
          @foreach($productSells as $productSell)
            <div class="col-sm-5 col-md-6">
              <p>{{ $productSell->description }}</p>
            </div>
          @endforeach
        </div>
    </div>
    <br>
    <!-- Description -->
    <h2 class="pb-2 border-bottom" id="aboutus">Price</h2>
    <div class="container text-center mt-5">
        <div class="row">
          @foreach($productSells as $productSell)
            <div class="col-sm-5 col-md-6">
              <h2>₱{{ $productSell->price }}</h2>
            </div>
          @endforeach
        </div>
    </div>
</div>
@endsection