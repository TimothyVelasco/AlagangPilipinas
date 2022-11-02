<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vet;

class VetlistDetailsController extends Controller
{
    public function vetdetails(Request $request)
    {
        $id = $request->get('id');
        $vet = Vet::where('id', $id)->first();
        //dd($product_sell);
        return view('admin_view/vetprofiles',[
            'vet' => $vet
        ]);
    }
}
