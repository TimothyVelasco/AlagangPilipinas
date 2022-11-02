@extends('layouts.supplier_petlostlayout')
@section('content')

@push('css')

<style>

    .gradient-custom-2 {
    background-color: #FFA500;
    }
    
    @media (min-width: 769px) {
    .gradient-custom-2 {
    border-top-left-radius: .5rem;
    border-bottom-left-radius: .5rem;
    }
    }
    
    h1{
      color: #C04000;
    }
    </style>
    



@endpush

<section class=" gradient-form w-100 " style= "height:100vh; overflow:auto;"  >
    <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100 mb-100">
        <div class="col-lg-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <a class="btn btn-primary mb-5" href="{{route('supplierlostpet.supplierlostpet')}}">Back to Lost Pets</a>
                    <center>
                      <h1>MISSING!</h1>
                      <br>
                      <img src="/storage/lostpet_photos/{{$lost_pet_details->pet_photo}}" width="100%" style="border: 5px solid #FFFFFF">
                      <div class="mt-4">
                        <h5>NAME</h5>
                        <h1 style="color:white">{{$lost_pet_details->petname}}</h1>
                      </div>
                    </center>
                  </div>
                </div>
              <div class="col-md-6">
                <div class="card-body p-md-5 mx-md-6">
  
                  <div class="text-center">
                    <img src="/image/AP.png" width="280px" alt="..." >
                  </div>
  
                  <h4 class="mt-4 mb-1 pb-1" style="color: #C04000">Description:</h4>
                  <p>{{$lost_pet_details->description}}</p>
  
                  <h5 class="mt-4 mb-1 pb-1" style="color: #C04000">Last seen location:</h5>
                  <p>{{$lost_pet_details->location}}</p>
  
                  <h5 class="mt-4 mb-1 pb-1" style="color: #C04000">Color:</h5>
                  <p>{{$lost_pet_details->color}}</p>
                  
                  <h5 class="mt-4 mb-1 pb-1" style="color: #C04000">Breed:</h5>
                  <p>{{$lost_pet_details->breed}}</p>
  
                  <h5 class="mt-4 mb-1 pb-1" style="color: #C04000">Gender:</h5>
                  <p>{{$lost_pet_details->gender}}</p>
  
                  <center><h2 class="mt-4 mb-1 pb-1" style="color: #C04000">Contact:</h2>
                  <p>{{$lost_pet_details->contact}}</p>
                  </center>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection