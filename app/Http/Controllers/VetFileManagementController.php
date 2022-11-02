<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\{
    Pet,
    PetVet
};

class VetFileManagementController extends Controller
{
    public function vfilemanagement()
    {
        $petIds = PetVet::where('vet_id', Auth::user()->id)
            ->select('pet_id')
            ->get()
            ->pluck('pet_id')
            ->toArray();

        $add_pets = Pet::whereIn('pets.id', $petIds)
            ->leftJoin('users', 'pets.user_id', '=', 'users.id')
            ->get();
        //dd($add_pets);
        return view('vet_view/vet_filemanagement',[
            'add_pets' => $add_pets
        ]);
    }
}
