<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\{
    MedicalRecord,
    Pet,
    PetVet,
    VaccineRecord,
    Vet,
    User
};

class PetProfileController extends Controller
{
    public function petprofile(Request $request)
    {

        $vetIds = [];
        $allowedVets = [];
        $vaccines = [];
        $medicalRecords = [];
        $vets = Vet::where('user_type', 2)
            ->get();

        $pets = Pet::where('user_id', Auth::user()->id)
            ->get();

        if (!empty($request->get('pet_id'))) {
            $pet = Pet::where('id', $request->get('pet_id'))
                ->first();
        } else {
            $pet = Pet::where('user_id', Auth::user()->id)
                ->first();
        }

        if ($pet) {
            $vetIds = PetVet::where('pet_id', $pet->id)
                ->select('vet_id')
                ->get()
                ->pluck('vet_id')
                ->toArray();

            $allowedVets = Vet::whereIn('id', $vetIds)
                ->get();
            
            $vaccines = VaccineRecord::where('pet_id', $pet->id)
                ->leftJoin('users', 'vaccine_records.vetclinic', '=', 'users.id')
                ->get();
            
            $medicalRecords = MedicalRecord::where('pet_id', $pet->id)
                ->leftJoin('users', 'medical_records.vetclinic', '=', 'users.id')
                ->get();
        }

        return view ('petowner_view/petprofile', [
            'pets' => $pets,
            'pet' => $pet,
            'vaccines' => $vaccines,
            'vets' => $vets,
            'medicalRecords' => $medicalRecords,
            'allowedVets' => $allowedVets,

        ]);
    }
}
