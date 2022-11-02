@extends('layouts.bloglayout')
@section('content')
    @push('css')
    @endpush

    <div class="container">
        <div class="    " >
            <!-- Content here -->

            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark"
                style="background: url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/golden-retriever-dog-royalty-free-image-505534037-1565105327.jpg);">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">The Alagang Pilipinas Blogspot</h1>
                    <p class="lead my-3">Read and share useful tips and advices to the pet owner's society</p>
                </div>
            </div>

        </div>

        <div class="row">
            @foreach ($new_blogs as $new_blog)
            <div class="col-sm-6 mb-2">
                <div class="card text-bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title">{{$new_blog->header}}</h5>
                        <p class="card-text">{{$new_blog->body}}</p>
                        <a href="#" class="btn btn-primary" style="float: right;">Read more</a>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
@endsection
