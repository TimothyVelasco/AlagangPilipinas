@extends('layouts.loginnav')
@section('content')
    @push('css')
        <style>
            .gradient-custom {
                /* fallback for old browsers */
                background: #f093fb;

                /* Chrome 10-25, Safari 5.1-6 */
                background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
            }

            .card-registration .select-input.form-control[readonly]:not([disabled]) {
                font-size: 1rem;
                line-height: 2.15;
                padding-left: .75em;
                padding-right: .75em;
            }

            .card-registration .select-arrow {
                top: 13px;
            }
        </style>
    @endpush

    <section class=""
        style="background-color: black; height:100vh; overflow:auto; background: url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/golden-retriever-dog-royalty-free-image-505534037-1565105327.jpg);">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-3 p-sm-5">
                            <center><img src="/image/APlogo.png" alt="..." width="250px" height="250px"></center>
                            <center>
                                <h4 class="mb-4 pb-2 pb-sm-0 mb-md-5">Registration Successful</h4>
                                <a href= "{{ route('login.login') }}"> <button type="button"class="btn btn-outline-danger">Back</button> </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
