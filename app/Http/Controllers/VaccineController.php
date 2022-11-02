<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function vaccineform(Request $request)
    {
        $pet_id = $request->get('pet_id');
        //dd($pet_id);
        return view('/vet_view/vet_vaccineform', [
            'pet_id' => $pet_id
        ]);
    }
    
}
