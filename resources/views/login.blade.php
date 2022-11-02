@extends('layouts.loginnav')
@push('css')
<style>
.gradient-custom-2 {
/* fallback for old browsers */
background: #DCDCDC;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #50C878, #728C00, #348781, #4C787E);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #C04000, #E78A61, #E66C2C, #4C787E);
}

@media (min-width: 768px) {
.gradient-form {
height: 95vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
@endpush

@section('content')




<section class=" gradient-form w-100 " style="background-color: black; height:100vh; overflow:auto; background: url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/golden-retriever-dog-royalty-free-image-505534037-1565105327.jpg);"  >
  <div class="container py-5 h-100 ">
  <div class="row d-flex justify-content-center align-items-center h-100 mb-100">
      <div class="col-lg-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-md-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="/image/APLogo2.png" style="width: 185px;" alt="...">
                  <h4 class="mt-1 mb-5 pb-1">Alagang Pilipinas</h4>
                </div>

                <form action="{{route('login.signin')}}" method="post">
                  @csrf
                 <center> <h5>Please login to your account </h5></center>
                 <center> <h5>As Pet Owner </h5></center>

                  <div class="form-outline mb-4 ">
                  <label class="form-label"  for="form2Example11">Email</label>
                    <input type="email" name="email" id="form2Example11" class="form-control" />
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label"  for="form2Example22">Password</label>
                    <input type="password"  name="password" id="form2Example22" class="form-control" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                  <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"type="submit">Login</button>

                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Login As</p>
                    <a href= "{{ route('vetlogin.vetlogin') }}"> <button type="button" class="btn btn-outline-danger ml-2">Vet Clinic</button> </a>
                    <a href= "{{ route('supplierlogin.supplierlogin') }}"> <button type="button" class="btn btn-outline-danger mr-2">Supplier</button> </a>
                    

                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a Marketplace</h4>
                <p class="small mb-0">We are a socially engaging marketplace that connects people with their pets. We deliver advices from the people with experience to the people who are seeking knowledge</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




@endsection