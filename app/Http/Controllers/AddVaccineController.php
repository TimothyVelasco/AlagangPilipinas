<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\VaccineRecord;

class AddVaccineController extends Controller
{
    public function addvaccinerecord(Request $request)
    {
        $pet_id = $request->get('pet_id');
        $vaccine = $request->get('vaccine');
        $shot = $request->get('shot');
        $date = $request->get('date');
        $vetclinic = $request->get('vetclinic');
        $vaccine_records = new VaccineRecord;
        $vaccine_records->vetclinic = Auth::user()->id;
        $vaccine_records->pet_id = $pet_id;
        $vaccine_records->vaccine = $vaccine;
        $vaccine_records->shot = $shot;
        $vaccine_records->date = $date;
        $vaccine_records->save();

        return redirect(route("vetpetdetails.vetpetdetails", ['id' => $pet_id]));

    }
}
