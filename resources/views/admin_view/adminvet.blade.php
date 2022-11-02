@extends('layouts.adminlayout')
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

            #sales th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }
        </style>
    @endpush

    <div class="container">
        <div>
            <div class="sidenav">
                <center><img src="/image/APLogoWhite.png" style="width: 200px;" alt="..."></center>
                <center>
                    <h1>Admin</h1>
                </center>
                <a href="{{ route('admin.userlist') }}">User List</a>
                <a href="{{ route('adminvet.adminvetlist') }}">Vet Clinic List</a>
                <a href="{{ route('adminpetrecords.adminpetrecords') }}">Pet Records</a>


            </div>
        </div>
        <center>
            <h1 style="margin-top: 20px; margin-bottom:20px;">Vet Records</h1>
        </center>
        <div class="content">
            <table class="table table-striped" id="sales">
                <tr>
                    <th>Vet Clinic Name</th>
                    <th>barangay</th>
                    <th>city</th>
                    <th>Email</th>
                    <th>Business Hours</th>
                    <th></th>
                </tr>
                @foreach ($vets as $vet)
                <tr>
                    <td>{{ $vet->vetname}}</td>
                    <td>{{ $vet->barangay}}</td>
                    <td>{{ $vet->city}}</td>
                    <td>{{ $vet->email}}</td>
                    <td>{{ $vet->businesshours}}</td>
                    <td><a  href="{{ route('vetlistdetails.vetdetails', ['id' => $vet->id]) }}" class="btn btn-primary">View Profile<a></td>
                @endforeach
            </table>    
        </div>
    </div>
@endsection
