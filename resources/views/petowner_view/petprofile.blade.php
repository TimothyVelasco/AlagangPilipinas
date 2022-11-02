@extends('layouts.master')
@section('content')
    <style>
        #example1 {
            padding: 10px;
            background: orange;
            width: 101%;
        }


        .emp-profile {

            margin-top: 3%;
            margin-bottom: 2%;
            background: #ffffff;
        }

        .profile-img {
            text-align: center;
            padding-right: 30px
        }

        .profile-img img {
            width: 100%;
            height: 100%;
        }

        label {
            font-weight: bold;
        }

        #tt th {
            background-color: #6a6a6a;
            Color: #ffffff;
        }
    </style>

    <!-- header -->
    <div class="container mt-4">
        <div class="dropdown mt-3" style="float: right">
            <button class="btn btn-Primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                style="background-color:#315494; color:white;">
                Pets
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add Pet
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Pet</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="vets" action="{{ route('addpet.addpet') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="ProductName" class="col-form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="ProductName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="col-form-label">Age</label>
                                    <input type="number"class="form-control" name="age" id="age" required>
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="col-form-label">Weight KG</label>
                                    <input type="number"class="form-control" name="weight" id="age" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ProductName" class="col-form-label">Birthdate</label>
                                    <input type="date" name="birthdate" class="form-control" id="birthdate" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Price"class="col-form-label">Color</label>
                                    <input type="text" name="color" class="form-control" id="price" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Price"class="col-form-label">Breed</label>
                                    <input type="text" name="breed" class="form-control" id="price" required>
                                </div>

                                <label for="gender" class="col-form-label">Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input " type="radio" name="gender"
                                        id="gender-male" value="Male">
                                    <label class="form-check-label" for="gender">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                        id="gender-female" value="female" checked>
                                    <label class="form-check-label mb-2" for="classification">
                                        female
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" name="pet_photo" type="file" id="pet_photo"
                                        multiple required>
                                    <label for="pet_photo" class="form-label" name="pet_photo">Upload a Photo</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <ul class="dropdown-menu">
            @foreach($pets as $p)
                <li><a class="dropdown-item" href="{{ route('petprofile.petprofile', ['pet_id' => $p->id]) }}">{{ $p->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div id="example1">
        <h1>Pet Information</h1>
    </div>
    </div>


    <!-- Pet info -->
    <div class="container emp-profile">
        @if($pet)
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="/storage/pet_photo/{{ $pet->pet_photo }}" alt="" />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label>Name</label>
                        </div>
                        <div class="col-md-4 mt-3">
                            <p>{{ $pet->name }}</p>
                        </div>
                        <div class="col-md-4 mt-3 text-right">
                            <div class="btn-group">
                                <button type="button" id="DD1" class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Veterenary Clinics
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    @foreach($vets as $vet)
                                        <li><button class="dropdown-item pet-vet-link" link="{{ route('petvet.petvet', ['pet_id' => $pet->id, 'vet_id' => $vet->id]) }}">{{ $vet->vetname }}</button></li>
                                    @endforeach
                                </ul>
                                <!-- Modal -->
                                <div class="modal fade" id="allowVet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Allow</h5>
                                            <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure to allow this veterinary clinic to access your pet information?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">No</button>
                                            <button type="button" class="btn btn-primary allow-vet-yes">Yes</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label>Age</label>
                        </div>
                        <div class="col-md-4 mt-3">
                            <p>{{ $pet->age }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label>Gender</label>
                        </div>
                        <div class="col-md-4 mt-3">
                            <p>{{ $pet->gender }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label>Birth Date</label>
                        </div>
                        <div class="col-md-4 mt-3">
                            <p>{{ $pet->birthdate }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label>Breed</label>
                        </div>
                        <div class="col-md-4 mt-3">
                            <p>{{ $pet->breed }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label>Weight</label>
                        </div>
                        <div class="col-md-4 mt-3">
                            <p>{{ $pet->weight }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label>Color</label>
                        </div>
                        <div class="col-md-4 mt-3">
                            <p>{{ $pet->color }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label>Vet Clinic Accessed</label>
                        </div>
                        <div class="col-md-4 mt-3">
                            @foreach($allowedVets as $allowedVet)
                                <p>{{ $allowedVet->vetname }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @else
            No pet record.
        @endif
    </div>

    <!-- header -->
    <div class="container mt-4">
        <div id="example1">
            <h1>Vaccine Record</h1>
        </div>
    </div>

    <!-- table -->
    <div class="container mt-4">
        @if (count($vaccines))
            <table class="table">
                <thead class="thead-dark" id="tt">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Vaccine Type</th>
                        <th scope="col">Shot</th>
                        <th scope="col">Date</th>
                        <th scope="col">Vet Clinic</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vaccines as $vaccine)
                        <tr>
                            <th scope="row">{{ $vaccine->id }}</th>
                            <td>{{ $vaccine->vaccine }}</td>
                            <td>{{ $vaccine->shot }}</td>
                            <td>{{ $vaccine->date }}</td>
                            <td>{{ $vaccine->vetname }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            No vaccine records.
        @endif
    </div>
    <div class="container mt-4 pl-auto">
        <div id="example1">
            <h1>Medical History</h1>
        </div>
        <br>
        @if (count($medicalRecords))
            <table class="table">
                <thead class="thead-dark" id="tt">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Complications</th>
                        <th scope="col">Medication</th>
                        <th scope="col">Date</th>
                        <th scope="col">Description</th>
                        <th scope="col">Vet Clinic</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($medicalRecords as $medicalRecord)
                        <tr>
                            <th scope="row" id="t1">{{ $medicalRecord->id }}</th>
                            <td>{{ $medicalRecord->complications}}</td>
                            <td>{{ $medicalRecord->medication}}</td>
                            <td>{{ $medicalRecord->date }}</td>
                            <td>{{ $medicalRecord->description }}</td>
                            <td>{{ $medicalRecord->vetname }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            No medical records.
        @endif
    </div>
@endsection

@push('scripts')
    <script>
        var link = null;
        $('.pet-vet-link').click(function() {
            $('#allowVet').modal('toggle');
            link = $(this).attr('link');
            console.log(link);
        });
        $('.close-modal').click(function() {
            $('#allowVet').modal('hide');
        });
        $('.allow-vet-yes').click(function() {
            window.location.href = link;
        });
    </script>
@endpush