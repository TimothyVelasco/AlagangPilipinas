@extends('layouts.master')

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

            /*<-------------------profile styles------------------>*/

            #header1 {
            padding: 10px;
            background: orange;
            width: 101%;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: rgb(255, 255, 255);
            background-clip: border-box;
            border: 3 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            height: 425px;
            padding: 1rem;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .upper {

            height: 10px;

        }

        .upper img {

            width: 370px;
            height: 100px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }
        

        .shadow-none {
            box-shadow: none !important;
        }

        .button-35 {
            align-items: center;
            background-color: #fff;
            border-radius: 0px;
            box-shadow: transparent 0 0 0 3px, rgba(18, 18, 18, .1) 0 6px 20px;
            box-sizing: border-box;
            color: #121212;
            cursor: pointer;
            display: inline-flex;
            flex: 1 1 auto;
            font-family: Inter, sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            justify-content: center;
            line-height: 1;
            margin: 0;
            outline: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            transition: box-shadow .2s, -webkit-box-shadow .2s;
            white-space: nowrap;
            border: 0;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-35:hover {
            box-shadow: #121212 0 0 0 3px, transparent 0 0 0 0;
        }

        .button-40 {
            background-color: #111827;
            border: 1px solid transparent;
            border-radius: .75rem;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            flex: 0 0 auto;
            font-family: "Inter var", ui-sans-serif, system-ui, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1.125rem;
            font-weight: 600;
            line-height: 1.5rem;
            padding: .75rem 1.2rem;
            text-align: center;
            text-decoration: none #6B7280 solid;
            text-decoration-thickness: auto;
            transition-duration: .2s;
            transition-property: background-color, border-color, color, fill, stroke;
            transition-timing-function: cubic-bezier(.4, 0, 0.2, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: auto;
        }

        .button-40:hover {
            background-color: #374151;
        }

        .button-40:focus {
            box-shadow: none;
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        @media (min-width: 768px) {
            .button-40 {
                padding: .75rem 1.5rem;
            }
        }

</style>
@endpush
<div class="">
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
        <a href="{{ route('marketvets.marketvets') }}">Vets</a>
        <a href="{{ route('marketsupplies.marketsupplies') }}">Supplies</a>
        <a href="{{ route('marketpets.marketpets') }}">Pets</a>
    </div>
</div>

<div class="container mt-3">
    <div class="main-body">
        <div id="header1">
            <h1>Seller Profile</h1>


        </div>
        <div class="row">
            <div class="col-md-4 mb-3 mt-4">
                <div class="card" id="pbg">
                    <div class="card-body">
                        <div class="upper">
                            <img src="/image/PO.jpg">
                        </div>
                        <div class="align-items-center text-center mt-3">
                            <img src="/storage/profile_photos/{{$product_sell->profilephoto}}" id="dp" alt="Admin" class="rounded-circle" width="130">
                            <div class="mt-3">
                                <h4></h4>
                                <p style="color:rgb(0, 0, 0)">{{ $product_sell->firstname }}</p>
                                <p style="color:rgb(0, 0, 0)">{{ $user_type }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $product_sell->firstname }} {{ $product_sell->lastname }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $product_sell->email }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Gender</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $product_sell->gender }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Contacts</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $product_sell->contact ?? "N/A" }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Building number and street</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $product_sell->street }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">barangay</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $product_sell->barangay }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">City</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $product_sell->city }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 
@endsection
