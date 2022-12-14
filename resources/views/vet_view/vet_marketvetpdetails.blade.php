@extends('layouts.vetnav')
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

            .information p {
                color: white;
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

    <div class="p-0 information container"
        style="border: 1px gray solid; border-radius: 15px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; background-color: #54718D;">
        <div class="row" style="margin:20px; background-color: white;">
            <div class="col-3 p-3 border-bottom" style="background-color:#54718D;">
                <a class="btn btn-primary mb-3" href="{{route('vetmarketvets.marketvets')}}">back to Marketplace</a>
                <img src="/storage/vet_profile_photos/{{$vet->vetprofilephoto}}" class="card-img-top card-img-thumbnail"> 
            </div>
            <div class="col-3 p-3 border-bottom" style="background-color:#54718D;">
                <h3 class="mt-5"><Strong>Vet Clinic Name:</Strong></h3>
                <p>
                <h5 style="color:white;">{{ $vet->vetname }}</h5>
                </p>
                <h3><Strong>Email:</Strong></h3>
                <p>
                <h5 style="color:white;">{{ $vet->email }}</h5>
                </p>
                <h3><Strong>Street</Strong></h3>
                <p>
                <h5 style="color:white;">{{ $vet->businesshours }}</h5>
                </p>
            </div>
            <div class="col-6 p-3 border-bottom" style="background-color:#54718D;">
                <a href="{{ route('vetvetdetails.sellerdetails', ['id' => $vet->id]) }}" class="btn  m-3"style="float: right; background-color:#83C44A">
                    Contact Vet Clinic</a>
            </div>

            <div class="col-12 p-3" style="background-color:#54718D;">
                <h3><Strong>Details</Strong></h3>
                <p style="color:white;"> {{ $vet->street }}</p>
                <p style="color:white;"> {{ $vet->barangay }}</p>
                <p style="color:white;"> {{ $vet->city }}</p>

            </div>
            <div class="col-12 p-3" style="background-color:#54718D;">
                <h3><Strong>Review</Strong></h3>
            </div>
            <div class="col-12 p-3" style="background-color:#54718D;">
                <div class="container">
                    <div class="row">
                        <div class="col-3 p-3" style="background-color:#DFBD74">
                            @foreach ($users as $user)
                            <center>{{$user->vetname}}</center>
                        </div>
                        @endforeach
                        <div class="col-9 p-3" style="background-color:white">
                            <form method="post" action="{{route('vetvetreview.vetmarketpdetails')}}" >
                                @csrf
                                <input name="vet_id" type="hidden" value="{{$vet->id}}">
                                <div class="">
                                    <textarea class="form-control" name="review" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                        </div>
                        <div class="col-3 p-3" style="background-color:#DFBD74">
                        </div>
                        <div class="col-9 p-3" style="background-color:white">
                            <button type="submit"href="#" class="btn btn-primary "style="float: right;">Upload Review
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 p-3" style="background-color:#54718D;">
                <div class="container">
                    @foreach($reviews as $review)
                    <div class="row">
                        <div class="col-3 p-3" style="background-color:#DFBD74">
                            <center>{{ $review->firstname }} {{ $review->lastname }}</center>
                            <br>
                            <center>{{ $review->created_at }}</center>
                        </div>
                        <div class="col-9 p-3" style="background-color:white">
                            <div class="">
                                <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $review->review }}</textarea>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
