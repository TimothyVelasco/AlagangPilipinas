@extends('layouts.supplier_bloglayout')
@section('content')
    @push('css')
    @endpush

    <div class="container">
        <div class="">
            <!-- Content here -->

            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark"
                style="background-color: black; height: 40vh; overflow:auto; background: url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/golden-retriever-dog-royalty-free-image-505534037-1565105327.jpg);">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">The Alagang Pilipinas Blogspot</h1>
                    <p class="lead my-3">Read and share useful tips and advices to the pet owner's society</p>

                </div>
            </div>

        </div>
        <center>
            <h4>My Blogs</h4>
        </Center>
        <!-- Upload Modal -->
        <button type="button" class="btn btn-primary float-righ" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@getbootstrap">Write a Blog</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Header</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Body</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Post blog</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- User's Blogs -->
        <div class="row">
            <div class="col-sm-6 mb-2 mt-3">
                <div class="card text-bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title">How to train your dog</h5>
                        <p class="card-text">My experience training my dog</p>
                        <a href="#" class="btn btn-primary" style="float: right;">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-2 mt-3">
                <div class="card text-bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title">Speding quality time for your pets</h5>
                        <p class="card-text">it is also important to give time to your pets</p>
                        <a href="#" class="btn btn-primary " style="float: right;">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-2 mt-3">
                <div class="card text-bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title">Special treatment</h5>
                        <p class="card-text">giving special treament for pets is not easy</p>
                        <a href="#" class="btn btn-primary" style="float: right;">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-2 mt-3">
                <div class="card text-bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title">genetic breeds of cats</h5>
                        <p class="card-text">having a rare breed of cat is expensive</p>
                        <a href="#" class="btn btn-primary" style="float: right;">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-2 mt-3">
                <div class="card text-bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title">Creating a bird house using limited equipments</h5>
                        <p class="card-text">learn to build a bird tower under a 20 minutes</p>
                        <a href="#" class="btn btn-primary" style="float: right;">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-2 mt-3">
                <div class="card text-bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title">having proper grooming for your pets</h5>
                        <p class="card-text">pets often go everywhere and gets dirty</p>
                        <a href="#" class="btn btn-primary" style="float: right;">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
