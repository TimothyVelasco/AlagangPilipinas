@extends('layouts.supplier_petlostlayout')
@section('content')
    @push('css')
    @endpush

    <div class="container">
        <div class="">
            <!-- Content here -->

            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark"
                style="background-color: black; height: 40vh; overflow:auto; background: url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/golden-retriever-dog-royalty-free-image-505534037-1565105327.jpg);">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">The Alagang Pilipinas Lost and Found system</h1>
                    <p class="lead my-3">Post a pet you have found here and deliever it to the its owner</p>

                </div>
            </div>

        </div>
        <center>
            <h4 style="color:white">Your Uploads</h4>
        </Center>
        <!-- Upload Modal -->
        <button type="button" class="btn btn-primary float-righ" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@getbootstrap">Upload a Found Pet</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Found Pet Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form id="blog" action="{{ route('foundpetupload.supplierfoundpetupload') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Location</label>
                                <input type="text" name="location" class="form-control" id="recipient-name" required>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Color</label>
                                <input type="text" name="color"class="form-control" id="recipient-name" required>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Breed</label>
                                <textarea class="form-control" name="breed" id="message-text" required></textarea>
                            </div>
                            <div class="col mb-4 "> Gender
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
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label mt-2">Description of the pet</label>
                                    <textarea class="form-control" name="description" id="message-text" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">How to contact you</label>
                                    <textarea class="form-control" name="contact" id="message-text" required></textarea>
                                </div>
                                <div class="mb-2">
                                    <label for="formFileMultiple" class="form-label mt-1">Upload a pet photo</label>
                                    <input class="form-control" name="pet_photo" type="file" id="formFileMultiple"
                                        multiple required>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lost Pets -->
        <div class="row">
            @foreach ($found_pets as $found_pet)
                <div class="col-sm-6 mb-2 mt-3">
                    <div class="card text-bg-secondary">
                        <div class="card-body">
                            <h5 class="card-title">{{ $found_pet->location }}</h5>
                            <p class="card-text"> {{ $found_pet->description }}</p>
                            <a href="{{route('supplierfoundpetdetails.foundpet',['id'=>$found_pet->id])}}" class="btn btn-primary" style="float: right;">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <center>
            <h4 style="color:white">Upload a Found Pet</h4>
        </Center>
        <div class="row">
            @foreach ($allfound_pets  as $allfound_pet)
                <div class="col-sm-6 mb-2 mt-3">
                    <div class="card text-bg-secondary">
                        <div class="card-body">
                            <h5 class="card-title">{{ $allfound_pet->location }}</h5>
                            <p class="card-text"> {{ $allfound_pet->description }}</p>
                            <a href="{{route('supplierfoundpetdetails.foundpet',['id'=>$allfound_pet->id])}}" class="btn btn-primary" style="float: right;">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
