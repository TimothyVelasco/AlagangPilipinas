<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetVet;

class PetVetController extends Controller
{
    public function petvet(Request $request)
    {
        $pet_id = $request->get('pet_id');
        $vet_id = $request->get('vet_id');

        $petVet = PetVet::where('pet_id', $pet_id)
            ->where('vet_id', $vet_id)
            ->first();

        if (!$petVet) {
            $petVet = new PetVet;
            $petVet->pet_id = $pet_id;
            $petVet->vet_id = $vet_id;
            $petVet->save();
        }

        return redirect(route('petprofile.petprofile', ['pet_id' => $pet_id]));
    }
}
