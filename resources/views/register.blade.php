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
                                <h4 class="mb-4 pb-2 pb-sm-0 mb-md-5">Registration</h4>
                            </center>

                            
                            <select class="form-control mb-2" id="dropdown-form">
                                <option value="user">Pet Owner</option>
                                <option value="vets">Vets</option>
                                <option value="supplier">Seller</option>
                            </select>
                            Account Type


                            <!-- user form -->
                            <form id="user" action="{{ route('user.register') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" id="user_type" name="user_type" value="1">
                                    <div class="col-md-6 mb-4 d-flex align-items-center mt-3">
                                        <div class="form-outline datepicker w-100">
                                            <input type="text" name="firstname" class="form-control form-control-lg"
                                                id="firstname" required />
                                            <label for="firstname" class="form-label">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 d-flex align-items-center mt-3">
                                        <div class="form-outline datepicker w-100">
                                            <input type="text" name="lastname" class="form-control form-control-lg"
                                                id="lastname" required />
                                            <label for="lastname" class="form-label">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <input type="date" name="birthdate" class="form-control form-control-lg"
                                                id="birthdayDate" required/>
                                            <label for="birthdayDate" class="form-label">Birthday</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 d-flex ">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="Male"
                                                id="gender-male" required>
                                            <label class="form-check-label" for="gender">
                                                Male
                                            </label>
                                            &nbsp;
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="Female"
                                                id="gender-female" checked required>
                                            <label class="form-check-label" for="gender">Female</label>
                                            <label for="Gender" class="form-label"></label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="others"
                                                id="gender-others" checked required>
                                            <label class="form-check-label" for="gender">Others</label>
                                            <label for="Gender" class="form-label"></label>
                                        </div>
                                    </div>

                                    <div class="form-outline datepicker w-100">
                                        <input type="number" name="contact" class="form-control form-control-lg"
                                            id="street" required />
                                        <label for="street" class="form-label">Contact</label>
                                    </div>
                                    <div class="form-outline datepicker w-100 mt-3">
                                        <input type="text" name="street" class="form-control form-control-lg"
                                            id="street" required/>
                                        <label for="street" class="form-label">Building number and Street</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 d-flex align-items-center mt-3">
                                            <div class="form-outline datepicker w-100">
                                                <input type="text" name="barangay" class="form-control form-control-lg"
                                                    id="barangay" required/>
                                                <label for="barangay" class="form-label">Barangay</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 d-flex align-items-center mt-3">
                                            <div class="form-outline datepicker w-100">
                                                <input type="text" name="city" class="form-control form-control-lg"
                                                    id="city" required/>
                                                <label for="city" class="form-label">City</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-outline datepicker w-100">
                                        <input type="email" name="email" class="form-control form-control-lg"
                                            id="email" required/>
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                    <div class="form-outline datepicker w-100">
                                        <input type="password" name="password"class="form-control form-control-lg"
                                            id="password" required />
                                        <label for="password" class="form-label">Password</label>
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control" name="profilephoto" type="file"
                                            id="formFileMultiple" required multiple>
                                        <label for="formFileMultiple" class="form-label mt-1">Upload a Profile
                                            Picture</label>
                                    </div>
                                    <center><button type="submit" class="btn btn-primary">Register</button></center>
                                </div>

                            </form>
                                                     <!-- uVETS form -->
                            <form id="vets" action="{{ route('vet.register') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" id="user_type" name="user_type" value="2">
                                    <div class="form-outline datepicker w-100 mt-3">
                                        <input type="text" name="vetname" class="form-control form-control-lg mb-2"
                                            id="vet_name" required/>
                                        <label for="vet_name" class="form-label">Vet Name</label>
                                    </div>
                                    <div class="form-outline datepicker w-100">
                                        <input type="text" name="street" class="form-control form-control-lg"
                                            id="email" required />
                                        <label for="street" class="form-label">Building number and Street</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 d-flex align-items-center mt-3">
                                            <div class="form-outline datepicker w-100">
                                                <input type="text" name="barangay" class="form-control form-control-lg"
                                                    id="barangay" required/>
                                                <label for="barangay" class="form-label">Barangay</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 d-flex align-items-center mt-3">
                                            <div class="form-outline datepicker w-100">
                                                <input type="text" name="city" class="form-control form-control-lg"
                                                    id="city" required/>
                                                <label for="city" class="form-label">City</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-outline datepicker w-100 mt-1">
                                        <input type="text" name="contact" class="form-control form-control-lg mb-2"
                                            id="contact" required/>
                                        <label for="contact" class="form-label">Contact</label>
                                    </div>
                                    <div class="form-outline datepicker w-100 mt-1">
                                        <input type="email" name="email" class="form-control form-control-lg mb-2"
                                            id="email" required/>
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                    <div class="form-outline datepicker w-100 mt-1">
                                        <input type="password" name="password" class="form-control form-control-lg mb-2"
                                            id="password" required/>
                                        <label for="password" class="form-label">Password</label>
                                    </div>
                                    <div class="form-outline datepicker w-100 mt-1">
                                        <input type="text" name="businesshours"
                                            class="form-control form-control-lg mb-2" id="btime"  required/>
                                        <label for="btime" class="form-label">Business Hours</label>
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control" name="vetprofilephoto" type="file"
                                            id="formFileMultiple" multiple required>
                                        <label for="formFileMultiple" class="form-label mt-1">Upload a Profile
                                            Picture</label>
                                    </div>
                                    <center><button type="submit" class="btn btn-primary">Register</button></center>
                                </div>
                            </form>
                                                     <!-- SUPPLIER form -->
                            <form id="supplier" action="{{ route('supplier.register') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" id="user_type" name="user_type" value="3">
                                    <div class="col-md-6 mb-4 d-flex align-items-center mt-3">
                                        <div class="form-outline datepicker w-100">
                                            <input type="text" name="firstname" class="form-control form-control-lg"
                                                id="firstname" required/>
                                            <label for="firstname" class="form-label">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 d-flex align-items-center mt-3">
                                        <div class="form-outline datepicker w-100">
                                            <input type="text" name="lastname" class="form-control form-control-lg"
                                                id="lastname" required/>
                                            <label for="lastname" class="form-label">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <input type="date" name="birthdate" class="form-control form-control-lg"
                                                id="birthdayDate" required/>
                                            <label for="birthdayDate" class="form-label">Birthday</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 d-flex ">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="Male"
                                                id="gender-male">
                                            <label class="form-check-label" for="gender">
                                                Male
                                            </label>
                                            &nbsp;
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="Female"
                                                id="gender-female" checked>
                                            <label class="form-check-label" for="gender">Female</label>
                                            <label for="Gender" class="form-label"></label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="others"
                                                id="gender-others" checked>
                                            <label class="form-check-label" for="gender">Others</label>
                                            <label for="Gender" class="form-label"></label>
                                        </div>
                                    </div>

                                    <div class="form-outline datepicker w-100">
                                        <input type="number" name="contact" class="form-control form-control-lg"
                                            id="street" required/>
                                        <label for="street" class="form-label">Contact</label>
                                    </div>
                                    <div class="form-outline datepicker w-100">
                                        <input type="text" name="street" class="form-control form-control-lg"
                                            id="email" required/>
                                        <label for="street" class="form-label">Building number and Street</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 d-flex align-items-center mt-3">
                                            <div class="form-outline datepicker w-100">
                                                <input type="text" name="barangay" class="form-control form-control-lg"
                                                    id="barangay" required/>
                                                <label for="barangay" class="form-label">Barangay</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 d-flex align-items-center mt-3">
                                            <div class="form-outline datepicker w-100">
                                                <input type="text" name="city" class="form-control form-control-lg"
                                                    id="city" required/>
                                                <label for="city" class="form-label">City</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-outline datepicker w-100">
                                        <input type="email" name="email" class="form-control form-control-lg"
                                            id="email" required/>
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                    <div class="form-outline datepicker w-100">
                                        <input type="password" name="password"class="form-control form-control-lg"
                                            id="password" required/>
                                        <label for="password" class="form-label">Password</label>
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control" name="supplierprofilephoto" type="file"
                                            id="formFileMultiple" multiple required>
                                        <label for="formFileMultiple" class="form-label mt-1">Upload a Profile
                                            Picture</label>
                                    </div>
                                    <center><button type="submit" class="btn btn-primary">Register</button></center>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
