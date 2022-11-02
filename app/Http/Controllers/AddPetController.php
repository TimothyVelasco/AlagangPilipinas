<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Pet;

class AddPetController extends Controller
{
    public function addpet(Request $request)
    {
        $name = $request->get('name');
        $age = $request->get('age');
        $gender = $request->get('gender');
        $birthdate = $request->get('birthdate');
        $breed = $request->get('breed');
        $weight = $request->get('weight');
        $color = $request->get('color');
        $pet_photo = $request->get('pet_photo');
        $filenameWithExt = $request->file('pet_photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('pet_photo')->getClientOriginalExtension();
        $fileNameToStore = $filename . '' . $name . $extension;
        $path = $request->file('pet_photo')->storeAs('public/pet_photo', $fileNameToStore);
        $pet_photo = $fileNameToStore;
        $add_pets = new Pet;
        $add_pets->user_id = Auth::user()->id;
        $add_pets->name = $name;
        $add_pets->age = $age;
        $add_pets->gender = $gender;
        $add_pets->birthdate = $birthdate;
        $add_pets->breed = $breed;
        $add_pets->weight = $weight;
        $add_pets->color= $color;
        $add_pets->pet_photo = $pet_photo;
        $add_pets->save();

        return redirect(route("petprofile.petprofile"));

    }
}
