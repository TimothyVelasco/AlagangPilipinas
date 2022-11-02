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

            .card-img-thumbnail {

                width: auto;
                height: 200px;


            }

            .card-description {

                min-height: 48px;
                max-height: 48px;
                height: 48px;
                overflow: hidden;

            }
        
            * {
                box-sizing: border-box;
            }

            /* Style the search field */
            form.example input[type=text] {
                padding: 10px;
                font-size: 17px;
                border: 1px solid grey;
                float: left;
                width: 80%;
                background: #f1f1f1;
            }

            /* Style the submit button */
            form.example button {
                float: left;
                width: 20%;
                padding: 10px;
                background: #dbc024;
                color: white;
                font-size: 17px;
                border: 1px solid grey;
                border-left: none;
                /* Prevent double borders */
                cursor: pointer;
            }

            form.example button:hover {
                background: #dbc024;
            }

            /* Clear floats */
            form.example::after {
                content: "";
                clear: both;
                display: table;
            }
        </style>
    @endpush

    <div class="container">
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
        <center>
            <h1 style="margin-top: 20px; margin-bottom:20px;">Marketplace</h1>
        </center>
        <form class="example mb-5" method="post" action="{{route('marketpets.marketPetsSearch')}}">
            @csrf
            <input type="text" placeholder="Search a Product" name="search">
            <button type="submit"><i class="fa fa-search"></i>Search</button>
        </form>

        <center><a  id="compare-link" href="{{route('productcompare.productcompare')}}" class="btn btn-success mb-4" style="">Compare Products</a></center>
        
        <div class="content">
            <div class="row">
                @foreach($product_sells as $product_sell)
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="col-12 card mb-5">
                        <img src="/storage/product_photos/{{ $product_sell->product_photo }}"
                            class="card-img-top card-img-thumbnail">
                        <div class="p-2">
                            <h4>{{ $product_sell->product_name }}</h4>
                        </div>
                        <div class="px-2">
                            <h5>{{ $product_sell->classification }}</h5>
                        </div>
                        <div class="px-2 mt-1">
                            <h5>{{ $product_sell->price }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text card-description">{{ $product_sell->description }}</p>
                            <a href="{{ route('marketpdetails.marketpdetails', ['id' => $product_sell->id]) }}" class="btn btn-primary">View
                                Details</a>
                        </div>
                        <center>
                            <div class="pb-2 border-bottom mb-2"></div> 
                            <input class="form-check-input mb-3 product-sell-checkbox" type="checkbox" value="" product-id="{{ $product_sell->id }}" id="product-sell-{{ $product_sell->id }}">
                            <label class="form-check-label" for="product-sell-{{ $product_sell->id }}">
                                Compare
                            </label>
                        </center>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var totalChecked = 0;
        var product_ids = [];
        $(document).ready(function() {
            $('.product-sell-checkbox').change(function() {
                if (this.checked) {
                    if (totalChecked >= 2) {
                        $(this).prop('checked', false);
                        return;
                    }
                    totalChecked = totalChecked + 1;
                    product_ids.push($(this).attr('product-id'));
                } else {
                    totalChecked = totalChecked - 1;
                    var index = product_ids.indexOf($(this).attr('product-id'));
                    if (index !== -1) {
                        product_ids.splice(index, 1);
                    }
                }

                let current_link = '{{route('productcompare.productcompare')}}';
                $("#compare-link").attr('href', current_link + "?product_ids=" + product_ids)

                console.log(totalChecked);
                console.log(product_ids);
            });
        });
    </script>
@endpush
