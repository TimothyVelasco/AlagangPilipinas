<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vet;

class AdminVetController extends Controller
{
       public function adminvetlist()
       {
        $vets = Vet::all();
        //dd($vets);
        return view('admin_view/adminvet', [
            'vets' => $vets
        ]);
    }

}
