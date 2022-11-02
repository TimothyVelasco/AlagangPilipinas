@extends('layouts.suppliernav')
@section('content')
    @push('css')
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


            /* ----button styles----*/
            .button {
                display: inline-block;
                border-radius: 4px;
                background-color: #3498DB;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 20px;
                padding: 9px;
                width: 200px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
                margin-right: 25px;
            }

            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }

            .information h3 {

                color: #F9E453;

            }
        </style>
    @endpush

    <div class="">
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


    <!-- Page Content -->

    <div class="information container"
        style="border: 1px gray solid; border-radius: 15px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; background-color: #54718D; padding:100px" >
        <div>
            <div class="row" style="margin:20px; background-color: white;">
                <div class="col-3 p-3 border-bottom" style="background-color:#54718D;">
                    <a href="{{ route('supplier.sales', ) }}" class="btn btn-primary mb-3">Back to sales</a>
                    <img src="/storage/product_photos/{{$product_sell->product_photo}}" class="card-img-top card-img-thumbnail"> 
                </div>
                    <div class="col-3 p-3 border-bottom" style="background-color:#54718D;">
                        <h3 class=><Strong>Product</Strong></h3>
                        <p>
                        <h5 style="color:white;">{{ $product_sell->product_name }}</h5>
                        </p>
                        <h3><Strong>Price</Strong></h3>
                        <p>
                        <h5 style="color:white;">₱ {{ $product_sell->price }}</h5>
                        </p>
                        <h3><Strong>Date Posted</Strong></h3>
                        <p>
                        <h5 style="color:white;">₱ {{ $product_sell->created_at }}</h5>
                        </p>
    
                </div>
                <div class="col-6 p-3 border-bottom" style="background-color:#54718D;">
                    <a href="{{route('sproductdetails.suppliermarkAsSold',['productSellId' => $product_sell->id])}}" class="btn  m-3"style="float: right; background-color:#83C44A">SOLD</a>
                </div>

                <div class="col-12 p-3" style="background-color:#54718D;">
                    <h3><Strong>Details</Strong></h3>
                    <p style="color:white;">
                        {{ $product_sell->description }}
                    </p>
                </div>
                <div class="col-12 p-3" style="background-color:#54718D;">
                    <h3><Strong>Reviews</Strong></h3>
                </div>

            </div>
            <div class="col-12 p-3" style="background-color:#54718D;">
                <div class="container">
                    <div class="row">
                        <div class="col-3 p-3" style="background-color:#DFBD74">
                            <center>User Name</center>
                        </div>
                        <div class="col-9 p-3" style="background-color:white">
                            <div class="">
                                <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3">This is good</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
