<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user_type = $request->get('user_type');
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $birthdate = $request->get('birthdate');
        $gender = $request->get('gender');
        $contact =$request->get('contact');
        $street = $request->get('street');
        $barangay = $request->get('barangay');
        $city = $request->get('city');
        $email = $request->get('email');
        $password = $request->get('password');
        $filenameWithExt = $request->file('profilephoto')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('profilephoto')->getClientOriginalExtension();
        $fileNameToStore = $filename . '' . $firstname . '_' . $lastname . '.' . $extension;
        $path = $request->file('profilephoto')->storeAs('public/profile_photos', $fileNameToStore);
        $profilephoto = $fileNameToStore;
        $user = new User;
        $user->user_type = $user_type;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->birthdate = $birthdate;
        $user->gender = $gender;
        $user->contact = $contact;
        $user->street = $street;
        $user->barangay = $barangay;
        $user->city = $city;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->profilephoto = $profilephoto;
        $user->save();

        return redirect(route("register.registersuccessful"));

    }


}
