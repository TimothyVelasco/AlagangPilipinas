@extends('layouts.vetnav')
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
        <div id="example1">
            <a class="btn btn-primary mt-2" href="{{ route('vfilemanagement.vfilemanagement') }}" style="float:right">Back to pet list</a>
            <h1>Pet Information</h1>
        </div>
    </div>


    <!-- Pet info -->
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="/storage/pet_photo/{{ $pet->pet_photo }}" class="card-img-top card-img-thumbnail">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label>Pet Name:</label>
                        </div>
                        <div class="col-md-4 mt-3">
                            <p>{{ $pet->name }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label>Pet Owner:</label>
                        </div>
                        <div class="col-md-4 mt-3">
                            <p>Jell Ellema</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label>Age:</label>
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
                </div>
            </div>
        </form>
    </div>

    <!-- header -->
    <div class="container mt-4">
        <div id="example1">
            <a href="{{ route('vaccineform.vaccineform', ['pet_id' => $pet->id]) }}" class="btn btn-primary mt-2"
                style="float:right">Add Vaccine</a>
            <h1>Vaccine Record</h1>
        </div>
    </div>

    <!-- table -->
    <div class="container mt-4">
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
                @foreach ($vaccines as $vaccine)
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
    </div>
    <div class="container mt-4 pl-auto">
        <a href="{{ route('medicalform.medicalform', ['pet_id' => $pet->id]) }}" class="btn btn-primary mt-3" style="float:right">Add Medical
            Record</a>
        <div id="example1">
            <h1>Medical Records</h1>
        </div>
        <br>
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
                @foreach($medicals as $medical)
                <tr>
                    <td>{{ $medical->id }}</td>
                    <td>{{ $medical->complications }}</td>
                    <td>{{ $medical->medications }}</td>
                    <td>{{ $medical->date }}</td>
                    <td>{{ $medical->description }}</td>
                    <td>{{ $medical->vetname }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
