@extends('layouts.vetnav')
@section('content')

    @push('css')

    @endpush

    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Onwer Name</th>
            <th scope="col">Birthdate</th>
            <th scope="col">Breed</th>
            <th scope="col"> Color</th>
            <th>Profile<th>

          </tr>
        </thead>
        <tbody>
          @foreach ($add_pets as $add_pet)
          <tr>
            <th>{{ $add_pet->id }}</th>
            <td>{{ $add_pet->name }}</td>
            <td>{{ $add_pet->firstname }} {{ $add_pet->lastname }}</td>
            <td>{{ $add_pet->age }}</td>
            <td>{{ $add_pet->breed }}</td>
            <td>{{ $add_pet->color }}</td>
            <td><a  href="{{ route('vetpetdetails.vetpetdetails', ['id' => $add_pet->id]) }}" class="btn btn-primary">View Profile<a></td>
          </tr>
          @endforeach
        </tbody>

      </table>

@endsection