@extends('layouts.vetnav')
@section('content')
    <link rel="stylesheet" href="https://icons.getbootstrap.com/icons/shop/">
    <style>
        img {
            object-fit: cover;
        }

        .name {
            color: blue;
        }

        .work {
            font-weight: bold;
            font-size: 15px;
        }

        .about span {
            font-size: 13px;
        }

        .v-profile {
            color: blue;
            cursor: pointer;
        }

        .box {
            -webkit-box-shadow: 13px 12px 5px -10px rgba(196, 194, 196, 0.72);
            -moz-box-shadow: 13px 12px 5px -10px rgba(196, 194, 196, 0.72);
            box-shadow: 13px 12px 5px -10px rgba(196, 194, 196, 0.72);
        }

        .col-md-3 {
            margin-top: 10px;
        }

        .card-description {
            min-height: 72px;
            max-height: 72px;
            height: 72px;
            overflow: hidden;
        }
    </style>


    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="../image/APbanner.jpg" class="d-block w-100" alt="..." width="540" height="620">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../image/pets2.jpeg" class="d-block w-100" alt="..." width="540" height="620">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../image/pets3.jpg" class="d-block w-100" alt="..." width="540" height="620">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <center>
                <h2 class="pb-2 border-bottom" id="market">MARKET</h2>
            </center>
            <br>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card">
                        <img src="../image/dogfood.jpg" class="card-img-top" alt="Dog Food" width="100" height="300">

                        <div class="card-body">
                            <h5 class="card-title">₱300</h5>
                            <h4 class="card-title">Dog Food</h4>
                            <p class="card-text card-description">Some quick example text to build on the card title and
                                make up the bulk of the card's content.Some quick example text to build on the card title
                                and make up the bulk of the card's content.Some quick example text to build on the card
                                title and make up the bulk of the card's content.Some quick example text to build on the
                                card title and make up the bulk of the card's content.</p>
                            <small class="text-muted">Pasay, National Capital Region</small>
                            <br><br>
                            <a href="#" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="../image/petcage.jpg" class="card-img-top" alt="Dog Food" width="100" height="300">

                        <div class="card-body">
                            <h5 class="card-title">₱1,000</h5>
                            <h4 class="card-title">Cage</h4>
                            <p class="card-text card-description">Some quick example text to build on the card title and
                                make up the bulk of the card's content.</p>
                            <small class="text-muted">Pasay, National Capital Region</small>
                            <br><br>
                            <a href="#" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="../image/dogtoy.jpg" class="card-img-top" alt="Dog Food" width="100" height="300">

                        <div class="card-body">
                            <h5 class="card-title">₱150</h5>
                            <h4 class="card-title">Toy</h4>
                            <p class="card-text card-description">Some quick example text to build on the card title and
                                make up the bulk of the card's content.</p>
                            <small class="text-muted">Pasay, National Capital Region</small>
                            <br><br>
                            <a href="#" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="py-5 text-center">
            <div class="row py-lg-5">
                @foreach($users as $user)
                <h1 class="fw-light">WELCOME {{$user->vetname}}</h1>
                @endforeach
                <p class="lead text-muted">
                    Its a web application community site for animal establishments and products enables users to
                    look for nearby vets, trustworthy merchants, and other people's recommendations.
                    From the sales and service activity of each veterinarian, this online application
                    can produce reports for analytics.
                </p>
            </div>
            <center><img src="../image/AP.png" width="400" height="100"></center>
        </section>
    </div>


    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom" id="features">Features</h2>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="d-flex flex-column align-items-start gap-2">
                <h2 class="fw-bold">Here's the Features of our Website</h2>
                <h5 class="text-muted">This shows all the Features of our Web Application</h5>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 g-4">
                <div class="d-flex flex-column gap-2">
                    <div
                        class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-shop" viewBox="0 0 17 17">
                            <path
                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                        </svg>
                    </div>
                    <h4 class="fw-semibold mb-0">Marketplace</h4>
                    <p class="text-muted">This feature allows Pet Owners and Veterinary Clinics to post their pet supplies
                        and purchase what they require for their pets.</p>
                </div>

                <div class="d-flex flex-column gap-2">
                    <div
                        class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-card-checklist" viewBox="0 0 16 16">
                            <path
                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path
                                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </div>
                    <h4 class="fw-semibold mb-0">Online Pet Records</h4>
                    <p class="text-muted">The user’s may use this feature to view their pet's records, which include name,
                        age, sex, vaccination records, and other important pet data.</p>
                </div>

                <div class="d-flex flex-column gap-2">
                    <div
                        class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-file-text" viewBox="0 0 19 17">
                            <path
                                d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                            <path
                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                        </svg>
                    </div>
                    <h4 class="fw-semibold mb-0">User Blog Window</h4>
                    <p class="text-muted">This feature is available for the user’s that would like to see, create and post
                        a
                        recommendation and advices to their fellow pet-owners in such a such way of
                        communicating and giving information them an information that is reliable. </p>
                </div>

                <div class="d-flex flex-column gap-2">
                    <div
                        class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-chat-square-dots" viewBox="0 0 20 15">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                    </div>
                    <h4 class="fw-semibold mb-0">Chatting System</h4>
                    <p class="text-muted">The user-buyer may use this feature to communicate to their contact seller and
                        to ensure that they are buying the right supplies for their pets.</p>
                </div>
            </div>
        </div>
        <!-- Meet our Team -->
        <h2 class="pb-2 border-bottom" id="about">Meet the Team</h2>
        <br>
        <center>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" src="../image/Tims.jfif" width="140"
                            height="140" />
                        <h2 class="fw-normal">Timothy Velasco</h2>
                        <p>Project Manager / Lead Developer</p>

                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" src="../image/keith.jpg" width="140"
                            height="140" />
                        <h2 class="fw-normal">Keith Topino</h2>
                        <p>Main UI Designer</p>

                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" src="../image/Luwe.jpg" width="140"
                            height="140" />
                        <h2 class="fw-normal">Louie Cortero</h2>
                        <p>Support Programmer</p>

                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 mt-5">
                        <img class="bd-placeholder-img rounded-circle" src="../image/jell.jpg" width="140"
                            height="140" />
                        <h2 class="fw-normal">Jell Ellema</h2>
                        <p>Secretary</p>

                    </div><!-- /.col-lg-4 -->
                    <br>
                    <div class="col-lg-4 mt-5">
                        <img class="bd-placeholder-img rounded-circle" src="../image/kaye.jpg" width="140"
                            height="140" />
                        <h2 class="fw-normal">Kaye Urquiza</h2>
                        <p>Secretary</p>

                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 mt-5">
                        <img class="bd-placeholder-img rounded-circle" src="../image/josh.png" width="140"
                            height="140" />
                        <h2 class="fw-normal">Joshua Magno</h2>
                        <p>Support Programmer</p>

                    </div><!-- /.col-lg-4 -->
                </div>
            </div>
        </center>
    @endsection
