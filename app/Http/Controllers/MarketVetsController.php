<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Vet,
    User
};

class MarketVetsController extends Controller
{
    public function marketvets()
    {
        $vets = User::where('user_type', 2)
        ->get();
        //dd($vets);
        return view('petowner_view/marketvets', [
            'vets' => $vets 
        ]);
    }

    public function marketVetSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $vets = Vet::where('vetname', 'LIKE', '%' .$search. '%')
            ->orWhere('barangay', 'LIKE', '%'. $search. '%')
            ->get();
        return view('petowner_view/marketvets', [
            'vets' => $vets 
        ]);
    }

    public function vetmarketvets()
    {
        $vets = User::where('user_type', 2)
        ->get();
        //dd($vets);
        return view('vet_view/vet_marketvets', [
            'vets' => $vets 
        ]);
    }

    public function vetMarketVetSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $vets = Vet::where('vetname', 'LIKE', '%' .$search. '%')
            ->orWhere('barangay', 'LIKE', '%'. $search. '%')
            ->get();
        return view('vet_view/vet_marketvets', [
            'vets' => $vets 
        ]);
    }

    public function suppliermarketvets()
    {
        $vets = User::where('user_type', 2)
        ->get();
        //dd($vets);
        return view('supplier_view/supplier_marketvets', [
            'vets' => $vets 
        ]);
    }

    public function supplierMarketVetSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $vets = Vet::where('vetname', 'LIKE', '%' .$search. '%')
            ->orWhere('barangay', 'LIKE', '%'. $search. '%')
            ->get();
        return view('supplier_view/supplier_marketvets', [
            'vets' => $vets 
        ]);
    }



}
