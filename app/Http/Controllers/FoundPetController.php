<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\FoundPet;

class FoundPetController extends Controller
{
    public function foundpet(){

        $found_pets = foundPet::where('user_id', Auth::user()->id)
        ->get();
        //dd($found_pets);

        $allfound_pets = foundpet::all();
        return view('Petowner_view/foundpet',[
            'found_pets' => $found_pets,
            'allfound_pets' =>$allfound_pets
        ]);

    }

    public function foundpetupload(Request $request){

        $location = $request->get('location');
        $color= $request->get('color');
        $breed = $request->get('breed');
        $gender = $request->get('gender');
        $description = $request->get('description');
        $contact = $request->get('contact');
        $filenameWithExt = $request->file('pet_photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('pet_photo')->getClientOriginalExtension();
        $fileNameToStore = $filename . '' . '.' . $extension;
        $path = $request->file('pet_photo')->storeAs('public/foundpet_photos', $fileNameToStore);
        $pet_photo = $fileNameToStore;
        $found_pets = new foundpet;
        $found_pets ->user_id = Auth::user()->id;
        $found_pets ->location = $location;
        $found_pets ->color = $color;
        $found_pets ->breed = $breed;
        $found_pets ->gender = $gender;
        $found_pets ->description = $description;
        $found_pets ->contact = $contact;
        $found_pets ->pet_photo = $pet_photo;
        $found_pets ->save();

        return redirect(route("foundpet.foundpet"));

    }

    public function foundpetdetails(Request $request) {

        $id = $request->get('id');
        $found_pet_details = FoundPet::where('id', $id)->first();

        //dd($lost_pet_details);
        return view('petowner_view/foundpetdetails',[
         'found_pet_details' => $found_pet_details  
        ]);

    }

    public function supplierfoundpet(){

        $found_pets = foundPet::where('user_id', Auth::user()->id)
        ->get();
        //dd($found_pets);

        $allfound_pets = foundpet::all();

        return view('supplier_view/supplier_foundpet',[
            'found_pets' => $found_pets,
            'allfound_pets' =>$allfound_pets
        ]);

    }

    public function supplierfoundpetupload(Request $request){

        $location = $request->get('location');
        $color= $request->get('color');
        $breed = $request->get('breed');
        $gender = $request->get('gender');
        $description = $request->get('description');
        $contact = $request->get('contact');
        $filenameWithExt = $request->file('pet_photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('pet_photo')->getClientOriginalExtension();
        $fileNameToStore = $filename . '' . '.' . $extension;
        $path = $request->file('pet_photo')->storeAs('public/foundpet_photos', $fileNameToStore);
        $pet_photo = $fileNameToStore;
        $found_pets = new foundpet;
        $found_pets ->user_id = Auth::user()->id;
        $found_pets ->location = $location;
        $found_pets ->color = $color;
        $found_pets ->breed = $breed;
        $found_pets ->gender = $gender;
        $found_pets ->description = $description;
        $found_pets ->contact = $contact;
        $found_pets ->pet_photo = $pet_photo;
        $found_pets ->save();

        return redirect(route("foundpet.supplierfoundpet"));

    }

    public function supplierfoundpetdetails(Request $request) {

        $id = $request->get('id');
        $found_pet_details = FoundPet::where('id', $id)->first();

        //dd($lost_pet_details);
        return view('supplier_view/supplier_foundpetdetails',[
         'found_pet_details' => $found_pet_details  
        ]);

    }




    public function vetfoundpet(){

        $found_pets = foundPet::where('user_id', Auth::user()->id)
        ->get();
        //dd($found_pets);

        $allfound_pets = foundpet::all();
        return view('vet_view/vet_foundpet',[
            'found_pets' => $found_pets,
            'allfound_pets' =>$allfound_pets
        ]);

    }

    

    public function vetfoundpetupload(Request $request){

        $location = $request->get('location');
        $color= $request->get('color');
        $breed = $request->get('breed');
        $gender = $request->get('gender');
        $description = $request->get('description');
        $contact = $request->get('contact');
        $filenameWithExt = $request->file('pet_photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('pet_photo')->getClientOriginalExtension();
        $fileNameToStore = $filename . '' . '.' . $extension;
        $path = $request->file('pet_photo')->storeAs('public/foundpet_photos', $fileNameToStore);
        $pet_photo = $fileNameToStore;
        $found_pets = new foundpet;
        $found_pets ->user_id = Auth::user()->id;
        $found_pets ->location = $location;
        $found_pets ->color = $color;
        $found_pets ->breed = $breed;
        $found_pets ->gender = $gender;
        $found_pets ->description = $description;
        $found_pets ->contact = $contact;
        $found_pets ->pet_photo = $pet_photo;
        $found_pets ->save();

        return redirect(route("vetfoundpet.foundpet"));

    }

    public function vetfoundpetdetails(Request $request) {

        $id = $request->get('id');
        $found_pet_details = FoundPet::where('id', $id)->first();

        //dd($lost_pet_details);
        return view('vet_view/vet_foundpetdetails',[
         'found_pet_details' => $found_pet_details  
        ]);

    }
}
