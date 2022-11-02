<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function medicalform(Request $request)
    
    {
        $pet_id = $request->get('pet_id');
           //dd($pet_id);
        return view('/vet_view/vet_medicalform', [
            'pet_id' => $pet_id
        ]);
    }
}
