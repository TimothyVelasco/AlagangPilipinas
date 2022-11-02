<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\ProductSell;

class SalesController extends Controller
{
    public function sales()
    {
        $product_sells = ProductSell::where('user_id', Auth::user()->id)
            ->get();
        //dd($product_sells);
        return view('petowner_view/sales', [
            'product_sells' => $product_sells 
        ]);

    }

    public function vetsales()
    {
        $product_sells = ProductSell::where('user_id', Auth::user()->id)
        ->get();
        //dd($product_sells);
        return view('vet_view/vet_sales', [
            'product_sells' => $product_sells 
    ]);
    }

    public function suppliersales()
    {
        $product_sells = ProductSell::where('user_id', Auth::user()->id)
        ->get();
        //dd($product_sells);
        return view('supplier_view/supplier_sales', [
            'product_sells' => $product_sells 
    ]);
    }
    
}
