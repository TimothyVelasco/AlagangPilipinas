<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\User;

class VetController extends Controller
{
    public function register(Request $request)
    {
        $user_type = $request->get('user_type');
        $vetname = $request->get('vetname');
        $street = $request->get('street');
        $barangay = $request->get('barangay');
        $city = $request->get('city');
        $contact = $request->get('contact');
        $email = $request->get('email');
        $password = $request->get('password');
        $businesshours = $request->get('businesshours');
        $filenameWithExt = $request->file('vetprofilephoto')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('vetprofilephoto')->getClientOriginalExtension();
        $fileNameToStore = $filename . '' . $vetname  . '.' . $extension;
        $path = $request->file('vetprofilephoto')->storeAs('public/vet_profile_photos', $fileNameToStore);
        $vetprofilephoto = $fileNameToStore;
        $user = new user;
        $user->user_type = $user_type;
        $user->vetname = $vetname;
        $user->street = $street;
        $user->barangay = $barangay;
        $user->city = $city;
        $user->contact = $contact;
        $user->email = $email;
        $user->password = hash::make($password);
        $user->businesshours = $businesshours;
        $user->vetprofilephoto = $vetprofilephoto;
        $user->save();

        return redirect(route("register.registersuccessful"));
    }

}
