@extends('layouts.vetnav')
@section('content')
    <style>
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
            height: 380px;
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


    <div class="container mt-3">
        <div class="main-body">
            <div id="header1">
                <h1>Profile</h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3 mt-4">
                    <div class="card" id="pbg">
                        <div class="card-body">
                            <div class="upper">
                                <img src="../image/PO.jpg">
                            </div>
                            <div class="align-items-center text-center mt-3">
                                @foreach($users as $user)
                                <img src="/storage/vet_profile_photos/{{$user->vetprofilephoto}}" id="dp" alt=".." class="rounded-circle" width="130">
                                @endforeach
                                <div class="mt-3">
                                    @foreach($users as $user)
                                    <h4>{{$user->vetname}}</h4>
                                    @endforeach
                                    <p style="color:rgb(0, 0, 0)">Vet Clinic</p>
                                    @foreach($users as $user)
                                    <p style="color:rgb(0, 0, 0)">{{$user->businesshours}}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Vet Name</h6>
                                </div>
                                @foreach($users as $user)
                                <div class="col-sm-9 text-secondary">
                                    {{$user->vetname}}
                                </div>
                                @endforeach
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                @foreach($users as $user)
                                <div class="col-sm-9 text-secondary">
                                    {{$user->email}}
                                </div>
                                @endforeach
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Contact</h6>
                                </div>
                                @foreach($users as $user)
                                <div class="col-sm-9 text-secondary">
                                    {{$user->contact}}
                                </div>
                                @endforeach
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Building number and Street</h6>
                                </div>
                                @foreach($users as $user)
                                <div class="col-sm-9 text-secondary">
                                    {{$user->street}}
                                </div>
                                @endforeach
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Barangay</h6>
                                </div>
                                @foreach($users as $user)
                                <div class="col-sm-9 text-secondary">
                                    {{$user->barangay}}
                                </div>
                                @endforeach
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">City</h6>
                                </div>
                                @foreach($users as $user)
                                <div class="col-sm-9 text-secondary">
                                    {{$user->city}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection