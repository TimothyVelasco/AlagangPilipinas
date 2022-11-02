<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Pet,
    VaccineRecord,
    Medicalrecord
};

class VetPetDetailsController extends Controller
{
    public function vetpetdetails(Request $request)
    {
        $id = $request->get('id');
        $pet = Pet::where('id', $id)->first();
        $vaccines = VaccineRecord::where('pet_id', $pet->id)
            ->leftJoin('users', 'vaccine_records.vetclinic', '=', 'users.id')
            ->get();
        $medicals = Medicalrecord::where('pet_id', $pet->id)
            ->leftJoin('users', 'medical_records.vetclinic', '=', 'users.id')
            ->get();
        //dd($add_pet);
        return view('vet_view/vet_petprofiles',[
            'pet' => $pet,
            'vaccines' => $vaccines,
            'medicals'=>$medicals

        ]);
    }
}
