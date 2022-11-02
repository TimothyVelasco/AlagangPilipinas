<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vet;

class VetCompareController extends Controller
{
    public function vetcompare(Request $request){

        $vet_ids = explode(',', $request->get('vet_ids'));
        $vets = User::whereIn('id', $vet_ids)
            ->get();

        return view ("petowner_view/vetcompare", [
            'vets' => $vets
        ]);
    }

    public function vetvetcompare(Request $request){
        
        $vet_ids = explode(',', $request->get('vet_ids'));
        $vets = User::whereIn('id', $vet_ids)
            ->get();

        return view ("vet_view/vet_vetcompare", [
            'vets' => $vets
        ]);

    }

    public function suppliervetcompare(Request $request){

        $vet_ids = explode(',', $request->get('vet_ids'));
        $vets = User::whereIn('id', $vet_ids)
            ->get();

        return view ("supplier_view/supplier_vetcompare", [
            'vets' => $vets
        ]);
    }
}
