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

            #sales {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #sales td,
            #sales th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #sales tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            #sales tr:hover {
                background-color: #ddd;
            }

            #sales th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }

            .product_photo {
                max-width: 100px;
                height: auto;
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
            <a href="{{ route('marketvets.marketvets') }}">Vet Clinic</a>
            <a href="{{ route('marketsupplies.marketsupplies') }}">Supplies</a>
            <a href="{{ route('marketpets.marketpets') }}">Pets</a>
        </div>
    </div>
    <!-- Upload Something Modal -->

    <center>
        <h1>Your Sales</h1>
    </center>
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"
        data-bs-whatever="@fat" style="float:right;">Upload Something</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Something</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form id="vets" action="{{ route('sell.product') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="ProductName" class="col-form-label">Product:</label>
                            <input type="text" name="product_name" class="form-control" id="ProductName" required>
                        </div>
                        <div class="mb-3">
                            <label for="Description" class="col-form-label">Description:</label>
                            <textarea class="form-control" name="description" id="Description" required></textarea>
                        </div>
                        <input type="hidden" name="status" value="sale">
                        <div class="mb-3">
                            <label for="Price"class="col-form-label">Price</label>
                            <input type="number" name="price" class="form-control" id="price" required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="classification" id="classification-pet"
                                value="Pet">
                            <label class="form-check-label" for="classification" required>
                                Pet
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="classification" id="classification-pet"
                                value="Supplies" checked>
                            <label class="form-check-label" for="classification">
                                Supplies
                            </label>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" name="product_photo" type="file" id="ProductImage" required
                                multiple>
                            <label for="product_photo" class="form-label" name="product_photo">Upload a Photo</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="content">

        <table class="table table-striped" id="sales">
            <tr>
                <th>Product Photo</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Status</th>
                <th>Classification</th>
            </tr>
            @foreach ($product_sells as $product_sell)
                <tr>
                    <td><img src="storage/product_photos/{{ $product_sell->product_photo }}" class="product_photo"></td>
                    <td><a
                            href="{{ route('sproductdetails.sproductdetails', ['id' => $product_sell->id]) }}">{{ $product_sell->product_name }}</a>
                    </td>
                    <td>{{ $product_sell->description }}</td>
                    <td>₱ {{ $product_sell->price }}</td>
                    <td>{{ $product_sell->status }}</td>
                    <td>{{ $product_sell->classification }}</td>
                </tr>
            @endforeach
        </table>

    </div>
    </div>
@endsection
