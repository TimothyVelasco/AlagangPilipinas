<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\LostPet;


class LostPetController extends Controller

{
    public function lostpet(){

        $lost_pets = LostPet::where('user_id', Auth::user()->id)
        ->get();
        //dd($lost_pets);

        $all_lost_pets = LostPet::all();
        //dd($all_lost_pets);
        return view('Petowner_view/lostpet',[
            'lost_pets' => $lost_pets,
            'all_lost_pets' =>$all_lost_pets
        ]);



    }

    public function lostpetupload(Request $request){

        $petname = $request->get('petname');
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
        $path = $request->file('pet_photo')->storeAs('public/lostpet_photos', $fileNameToStore);
        $pet_photo = $fileNameToStore;
        $lost_pets = new Lostpet;
        $lost_pets->user_id = Auth::user()->id;
        $lost_pets ->petname = $petname;
        $lost_pets ->location = $location;
        $lost_pets ->color = $color;
        $lost_pets ->breed = $breed;
        $lost_pets ->gender = $gender;
        $lost_pets ->description = $description;
        $lost_pets ->contact = $contact;
        $lost_pets ->pet_photo = $pet_photo;
        $lost_pets ->save();

        return redirect(route("lostpet.lostpet"));
    }


    public function lostpetdetails(Request $request){

        $id = $request->get('id');
        $lost_pet_details = LostPet::where('id', $id)->first();

        //dd($lost_pet_details);
        return view('petowner_view/lostpetdetails',[
         'lost_pet_details' => $lost_pet_details  
        ]);

    }

    public function supplierlostpet(){

        $lost_pets = LostPet::where('user_id', Auth::user()->id)
        ->get();
        //dd($lost_pets);

        $all_lost_pets = LostPet::all();
        //dd($all_lost_pets);
        return view('supplier_view/supplier_lostpet',[
            'lost_pets' => $lost_pets,
            'all_lost_pets' => $all_lost_pets
        ]);

    }

    public function supplierlostpetupload(Request $request){

        $petname = $request->get('petname');
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
        $path = $request->file('pet_photo')->storeAs('public/lostpet_photos', $fileNameToStore);
        $pet_photo = $fileNameToStore;
        $lost_pets = new Lostpet;
        $lost_pets ->petname = $petname;
        $lost_pets ->user_id = Auth::user()->id;
        $lost_pets ->location = $location;
        $lost_pets ->color = $color;
        $lost_pets ->breed = $breed;
        $lost_pets ->gender = $gender;
        $lost_pets ->description = $description;
        $lost_pets ->contact = $contact;
        $lost_pets ->pet_photo = $pet_photo;
        $lost_pets ->save();

        return redirect(route("supplierlostpet.supplierlostpet"));

    }

    public function supplierlostpetdetails(Request $request){

        $id = $request->get('id');
        $lost_pet_details = LostPet::where('id', $id)->first();

        //dd($lost_pet_details);
        return view('supplier_view/supplier_lostpetdetails',[
         'lost_pet_details' => $lost_pet_details  
        ]);

    }

    public function vetlostpet(){

        $lost_pets = LostPet::where('user_id', Auth::user()->id)
        ->get();
        //dd($lost_pets);

        $all_lost_pets = LostPet::all();
        //dd($all_lost_pets);
        return view('vet_view/vet_lostpet',[
            'lost_pets' => $lost_pets,
            'all_lost_pets' => $all_lost_pets
        ]);

    }

    public function vetlostpetupload(Request $request){

        $petname = $request->get('petname');
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
        $path = $request->file('pet_photo')->storeAs('public/lostpet_photos', $fileNameToStore);
        $pet_photo = $fileNameToStore;
        $lost_pets = new Lostpet;
        $lost_pets->user_id = Auth::user()->id;
        $lost_pets ->petname = $petname;
        $lost_pets ->location = $location;
        $lost_pets ->color = $color;
        $lost_pets ->breed = $breed;
        $lost_pets ->gender = $gender;
        $lost_pets ->description = $description;
        $lost_pets ->contact = $contact;
        $lost_pets ->pet_photo = $pet_photo;
        $lost_pets ->save();

        return redirect(route("lostpet.lostpet"));

    }

    public function vetlostpetdetails(Request $request){

        $id = $request->get('id');
        $lost_pet_details = LostPet::where('id', $id)->first();

        //dd($lost_pet_details);
        return view('vet_view/vet_lostpetdetails',[
         'lost_pet_details' => $lost_pet_details  
        ]);

    }
}
