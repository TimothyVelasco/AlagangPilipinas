<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Medicalrecord;

class AddMedicalController extends Controller
{
    public function addmedicalrecord(Request $request)
    {
        $complications = $request->get('complications');
        $medication = $request->get('medication');
        $date = $request->get('date');
        $description = $request->get('description');
        $pet_id = $request->get('pet_id');
        $medical_records = new Medicalrecord;
        $medical_records->pet_id = $pet_id;
        $medical_records->complications = $complications ;
        $medical_records->medication = $medication;
        $medical_records->date = $date;
        $medical_records->description = $description;
        $medical_records->vetclinic = Auth::user()->id;
        $medical_records->save();

        return redirect(route("vetpetdetails.vetpetdetails", ['id' => $pet_id]));

    }
}
