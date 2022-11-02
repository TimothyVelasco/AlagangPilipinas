@extends('layouts.loginnav')

@section('content')
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #DCDCDC;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #50C878, #728C00, #348781, #4C787E);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #293462, #F24C4C, #EC9B3B, #F7D716);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 95vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .5rem;
                border-top-left-radius: .5rem;
                width: 632px;
            }
        }

        .card {
            width: 100%;
            position:
        }

        @media (min-width: 768px) {
            .mx-md-3 {
                margin-right: 8rem !important;
                margin-left: 8rem !important;
            }
        }
    </style>




    <section class=" gradient-form w-100 "
        style="height:50ch; overflow:visible; background: url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/golden-retriever-dog-royalty-free-image-505534037-1565105327.jpg);">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100 mb-100">
                <div class="col-lg-6">
                    <div class="card text-black">
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h1 class="mb-4">Welcome Supplier!</h1>
                                <h4 class="mb-4">We are more than just a Marketplace</h4>
                                <p class="small mb-0">We are a socially engaging marketplace that connects people with their
                                    pets. We deliver advices from the people with experience to the people who are seeking
                                    knowledge</p>
                            </div>
                        </div>
                        <div class="col-md-14">
                            <div class="card-body p-md-2 mx-md-3">
                                <div class="text-center">
                                    <img src="/image/AP01.png" width="300px" alt="...">
                                    <h2 class="mt-4 mb-2 pb-1">Sign in as Supplier</h3>
                                </div>


                                <center>
                                    <p>Please login to your account</p>
                                </center>
                                <form action="{{route('suppliersignin.supplierlogin')}}" method="post">
                                    @csrf
                                    <div class="form-outline mb-4 ">
                                        <label class="form-label" for="form2Example11">Email</label>
                                        <input type="email" name="email" id="form2Example11" class="form-control" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22">Password</label>
                                        <input type="password" name="password" id="form2Example22" class="form-control" />
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg mb-3"type="submit">Login</button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Login as</p>
                                        <a href="{{ route('vetlogin.vetlogin') }}" type="button"class="btn btn-outline-danger ml-2">Vet Clinic</a>
                                        <a href="{{ route('login.login') }}" type="button" class="btn btn-outline-danger mr-2">Pet Owner </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
